<?php

namespace App\Http\Controllers;

use App\Match;
use App\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $match = new Match();
        $game1 = new Game();
        $game2 = new Game();
        $game3 = new Game();

        $match_id = str_random(32);

        $match->id                    = $match_id;
        $match->date                  = Carbon::now();
        $match->project_id            = $request->project_id;
        $match->opponent_archetype_id = $request->opponent_archetype_id;
        $match->opponent_name         = $request->opponent_name;
        $match->result                = $this->calculateResult($request->g1result, $request->g2result, $request->g3result);
        $match->memo                  = $request->memo;
        $match->save();

        $game1->match_id     = $match_id;
        $game1->num          = 1;
        $game1->mulligan     = $request->g1mulligan;
        $game1->first        = $request->g1first;
        $game1->result       = $request->g1result;
        $game1->land_trouble = $request->g1land_trouble;
        $game1->memo         = $request->g1memo;
        $game1->created_at   = Carbon::now();
        $game1->updated_at   = Carbon::now();
        $game1->save();

        if($request->g2first != 'None') {
            $game2->match_id     = $match_id;
            $game2->num          = 2;
            $game2->mulligan     = $request->g2mulligan;
            $game2->first        = $request->g2first;
            $game2->result       = $request->g2result;
            $game2->land_trouble = $request->g2land_trouble;
            $game2->memo         = $request->g2memo;
            $game2->created_at   = Carbon::now();
            $game2->updated_at   = Carbon::now();
            $game2->save();
        }

        if($request->g3first != 'None') {
            $game3->match_id     = $match_id;
            $game3->num          = 3;
            $game3->mulligan     = $request->g3mulligan;
            $game3->first        = $request->g3first;
            $game3->result       = $request->g3result;
            $game3->land_trouble = $request->g3land_trouble;
            $game3->memo         = $request->g3memo;
            $game3->created_at   = Carbon::now();
            $game3->updated_at   = Carbon::now();
            $game3->save();
        }

        return redirect()->to($request->back_to);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }

    private function calculateResult($g1_result, $g2_result, $g3_result) {
        $results = array($g1_result, $g2_result, $g3_result);
        $count = 0;
        foreach ($results as $result) {
            switch ($result) {
                case 'W':
                    $count += 1;
                    break;
                case 'L':
                    $count -= 1;
                    break;
                case 'D':
                    break;
            }
        }

        if ($count > 0) {
            return 'W';
        } else if ($count === 0) {
            return 'D';
        } else if ($count < 0) {
            return 'L';
        }
    }
}
