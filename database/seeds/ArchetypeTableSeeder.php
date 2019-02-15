<?php

use Illuminate\Database\Seeder;

class ArchetypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('archetypes')->insert([
            'id' => '4kr3feES2tV27w7UAezYf5HVTsDNkuDz',
            'user_id' => 'test0000000000000000000000000000',
            'format_id' => '9JewiPtB9iIcvjIZrRg4xzhyJBArSMls',
            'format_term_id' => null,
            'name' => 'バーン',
            'color' => 'R',
            'splash_color' => 'wg'
        ]);
        DB::table('archetypes')->insert([
            'id' => '369l6UMUp7UmxHtmsoW1SvKWmuiX04Vd',
            'user_id' => 'test0000000000000000000000000000',
            'format_id' => '9JewiPtB9iIcvjIZrRg4xzhyJBArSMls',
            'format_term_id' => null,
            'name' => 'グリクシスシャドウ',
            'color' => 'UBR',
            'splash_color' => null
        ]);
        DB::table('archetypes')->insert([
            'id' => '0JYR4YgMz8pDgtvHLyOw728uvnL8dSua',
            'user_id' => 'test0000000000000000000000000000',
            'format_id' => '9JewiPtB9iIcvjIZrRg4xzhyJBArSMls',
            'format_term_id' => null,
            'name' => 'マルドゥパイロマンサー',
            'color' => 'BR',
            'splash_color' => 'w'
        ]);
    }
}
