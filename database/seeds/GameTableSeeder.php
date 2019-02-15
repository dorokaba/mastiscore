<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'match_id' => 'zsjEpfJs9FGXWUsx9YnKo3jpwQDfMD67',
            'num' => '1',
            'mulligan' => '0',
            'first' => 'P',
            'result' => 'W',
            'land_trouble' => 'None',
            'memo' => ''
        ]);
        DB::table('games')->insert([
            'match_id' => 'zsjEpfJs9FGXWUsx9YnKo3jpwQDfMD67',
            'num' => '2',
            'mulligan' => '1',
            'first' => 'D',
            'result' => 'L',
            'land_trouble' => 'None',
            'memo' => ''
        ]);
        DB::table('games')->insert([
            'match_id' => 'zsjEpfJs9FGXWUsx9YnKo3jpwQDfMD67',
            'num' => '3',
            'mulligan' => '0',
            'first' => 'P',
            'result' => 'W',
            'land_trouble' => 'None',
            'memo' => ''
        ]);

        DB::table('games')->insert([
            'match_id' => 'bF0QJaCziC2wLWsrdvWVTUJWMdcHXoAw',
            'num' => '1',
            'mulligan' => '0',
            'first' => 'D',
            'result' => 'L',
            'land_trouble' => 'None',
            'memo' => ''
        ]);
        DB::table('games')->insert([
            'match_id' => 'bF0QJaCziC2wLWsrdvWVTUJWMdcHXoAw',
            'num' => '2',
            'mulligan' => '1',
            'first' => 'P',
            'result' => 'L',
            'land_trouble' => 'Screw',
            'memo' => ''
        ]);

        DB::table('games')->insert([
            'match_id' => 'GqfokfSSGKuyHpE6HyiuWpPToTbHxJpv',
            'num' => '1',
            'mulligan' => '0',
            'first' => 'D',
            'result' => 'W',
            'land_trouble' => 'None',
            'memo' => ''
        ]);
        DB::table('games')->insert([
            'match_id' => 'GqfokfSSGKuyHpE6HyiuWpPToTbHxJpv',
            'num' => '2',
            'mulligan' => '1',
            'first' => 'P',
            'result' => 'L',
            'land_trouble' => 'Flood',
            'memo' => ''
        ]);
        DB::table('games')->insert([
            'match_id' => 'GqfokfSSGKuyHpE6HyiuWpPToTbHxJpv',
            'num' => '3',
            'mulligan' => '0',
            'first' => 'D',
            'result' => 'W',
            'land_trouble' => 'None',
            'memo' => ''
        ]);
    }
}
