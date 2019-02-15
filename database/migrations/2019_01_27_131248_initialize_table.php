<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitializeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('users', function(Blueprint $table)
        {
            $table->string('id');
            $table->string('name')->nullable();
            $table->timestamps();

            $table->primary(['id'], 'users_pmry');
        });

        Schema::create('formats', function(Blueprint $table)
        {
            $table->string('id');
            $table->string('name');
            $table->integer('display_order');
            $table->boolean('has_terms');

            $table->primary(['id']);
        });

        Schema::create('format_terms', function(Blueprint $table)
        {
            $table->string('id');
            $table->string('format_id');
            $table->string('range');
            $table->timestamps();

            $table->primary(['id']);
            $table->foreign('format_id')->references('id')->on('formats')->onDelete('cascade');
        });

        Schema::create('archetypes', function(Blueprint $table)
        {
            $table->string('id');
            $table->string('user_id');
            $table->string('format_id');
            $table->string('format_term_id')->nullable();
            $table->string('name');
            $table->string('color')->nullable();
            $table->string('splash_color')->nullable();
            $table->timestamps();

            $table->primary(['id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('format_id')->references('id')->on('formats')->onDelete('cascade');
            $table->foreign('format_term_id')->references('id')->on('format_terms')->onDelete('cascade');
        });

        Schema::create('projects', function(Blueprint $table)
        {
            $table->string('id');
            $table->string('user_id');
            $table->string('archetype_id');
            $table->string('name')->nullable();
            $table->timestamps();

            $table->primary(['id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('archetype_id')->references('id')->on('archetypes')->onDelete('cascade');
        });

        Schema::create('matches', function(Blueprint $table)
        {
            $table->string('id');
            $table->timestamp('date');
            $table->string('project_id')->references('id')->on('projects');
            $table->string('opponent_archetype_id');
            $table->string('opponent_name')->nullable();
            $table->enum('result', array('W','L','D'));
            $table->string('memo')->nullable();

            $table->primary(['id']);
            $table->foreign('opponent_archetype_id')->references('id')->on('archetypes')->onDelete('cascade');
        });

        Schema::create('games', function(Blueprint $table)
        {
            $table->string('match_id');
            $table->enum('num', array(1,2,3));
            $table->integer('mulligan');
            $table->enum('first', array('P','D'));
            $table->enum('result', array('W','L','D'));
            $table->enum('land_trouble', array('None','Screw','Flood'));
            $table->string('memo')->nullable();
            $table->timestamps();

            $table->unique(['match_id', 'num']);
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
        Schema::drop('matches');
        Schema::drop('projects');
        Schema::drop('archetypes');
        Schema::drop('format_terms');
        Schema::drop('formats');
        Schema::drop('users');
    }
}
