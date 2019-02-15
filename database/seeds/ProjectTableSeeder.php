<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'id' => 'BvntbCBcdOFWqxHgd90uIbyVkAupdH6V',
            'name' => 'テスト',
            'user_id' => 'test0000000000000000000000000000',
            'archetype_id' => '4kr3feES2tV27w7UAezYf5HVTsDNkuDz'
        ]);
    }
}
