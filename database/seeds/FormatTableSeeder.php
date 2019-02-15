<?php

use Illuminate\Database\Seeder;

class FormatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formats')->insert([
        	'id' => 'OwD0SkoROVugEK2PonyKCDtu4LmaLF1s',
        	'name' => 'スタンダード',
        	'display_order' => '0',
            'has_terms' => true
        ]);
        DB::table('formats')->insert([
        	'id' => '9JewiPtB9iIcvjIZrRg4xzhyJBArSMls',
        	'name' => 'モダン',
        	'display_order' => '1',
            'has_terms' => false
        ]);
        DB::table('formats')->insert([
        	'id' => '2iIKZNmX9K3pAI64cpTzVfxpX6p6bWSK',
        	'name' => 'レガシー',
        	'display_order' => '2',
            'has_terms' => false
        ]);
        DB::table('formats')->insert([
        	'id' => 'gNDtdt81X7kjVodtR26gTZK5mjC88Bci',
        	'name' => 'ヴィンテージ',
        	'display_order' => '3',
            'has_terms' => false
        ]);
        DB::table('formats')->insert([
        	'id' => 'njiLnwdWR4qB2Dnz49NGIrImAUOsRlUf',
        	'name' => 'パウパー',
        	'display_order' => '4',
            'has_terms' => false
        ]);
    }
}
