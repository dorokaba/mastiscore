<?php

use Illuminate\Database\Seeder;

class MatcheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'id' => 'zsjEpfJs9FGXWUsx9YnKo3jpwQDfMD67',
            'date' => '2019-01-01 00:00:00',
            'project_id' => 'BvntbCBcdOFWqxHgd90uIbyVkAupdH6V',
            'opponent_archetype_id' => '369l6UMUp7UmxHtmsoW1SvKWmuiX04Vd',
            'opponent_name' => '対戦相手A',
            'result' => 'W',
            'memo' => ''
        ]);
        DB::table('matches')->insert([
            'id' => 'bF0QJaCziC2wLWsrdvWVTUJWMdcHXoAw',
            'date' => '2019-01-01 00:00:00',
            'project_id' => 'BvntbCBcdOFWqxHgd90uIbyVkAupdH6V',
            'opponent_archetype_id' => '369l6UMUp7UmxHtmsoW1SvKWmuiX04Vd',
            'opponent_name' => '対戦相手B',
            'result' => 'L',
            'memo' => ''
        ]);
        DB::table('matches')->insert([
            'id' => 'GqfokfSSGKuyHpE6HyiuWpPToTbHxJpv',
            'date' => '2019-01-01 00:00:00',
            'project_id' => 'BvntbCBcdOFWqxHgd90uIbyVkAupdH6V',
            'opponent_archetype_id' => '0JYR4YgMz8pDgtvHLyOw728uvnL8dSua',
            'opponent_name' => '対戦相手C',
            'result' => 'W',
            'memo' => ''
        ]);
    }
}
