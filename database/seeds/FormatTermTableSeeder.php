<?php

use Illuminate\Database\Seeder;

class FormatTermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('format_terms')->insert([
            'id' => 'fgfYX88zXnBIbaiYkg042uJROwJeLpW1',
            'format_id' => 'OwD0SkoROVugEK2PonyKCDtu4LmaLF1s',
            'range' => 'IXN-RNA'
        ]);
    }
}
