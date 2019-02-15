<?php

namespace App\Http\Controllers;

use App\Project;
use App\Format;
use App\FormatTerm;
use App\Archetype;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects     = Project::all();
        $formats      = Format::all();
        $format_terms = FormatTerm::all();
        $archetypes   = Archetype::all();

        return view('projects.index', ['projects' => $projects, 'formats' => $formats, 'archetypes' => $archetypes,
            'format_terms' => $format_terms]);
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
        $project               = new Project;
        $project->id           = str_random(32);
        $project->user_id      = 'test0000000000000000000000000000';
        $project->archetype_id = $request->archetype_id;
        $project->name         = $request->name;
        $project->created_at   = Carbon::now();
        $project->updated_at   = Carbon::now();

        $project->save();

        return redirect()->to('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $archetypes   = Archetype::all();
        $formats      = Format::all();
        $format_terms = FormatTerm::all();

        $archetype = DB::table('archetypes')
                     ->where('id', $project->archetype_id)
                     ->get()->first();

        $mulligan1 = DB::table('games')
                           ->selectRaw('FORMAT(COUNT(mulligan = 1 OR NULL) / COUNT(*) * 100, 2) as mulligan1')
                           ->join('matches', 'games.match_id', 'matches.id')
                           ->where('matches.project_id', $project->id)
                           ->value('mulligan1');

        $mulligan2 = DB::table('games')
                           ->selectRaw('FORMAT(COUNT(mulligan = 2 OR NULL) / COUNT(*) * 100, 2) as mulligan2')
                           ->join('matches', 'games.match_id', '=', 'matches.id')
                           ->where('matches.project_id', $project->id)
                           ->value('mulligan2');

        $mulligan3 = DB::table('games')
                           ->selectRaw('FORMAT(COUNT(mulligan >= 3 OR NULL) / COUNT(*) * 100, 2) as mulligan3')
                           ->join('matches', 'games.match_id', 'matches.id')
                           ->where('matches.project_id', $project->id)
                           ->value('mulligan3');

        $mana_flood = DB::table('games')
                           ->selectRaw('FORMAT(COUNT(land_trouble = "Flood" OR NULL) / COUNT(*) * 100, 2) as mana_flood')
                           ->join('matches', 'games.match_id', 'matches.id')
                           ->where('matches.project_id', $project->id)
                           ->value('mana_flood');

        $mana_screw = DB::table('games')
                           ->selectRaw('FORMAT(COUNT(land_trouble = "Screw" OR NULL) / COUNT(*) * 100, 2) as mana_screw')
                           ->join('matches', 'games.match_id', 'matches.id')
                           ->where('matches.project_id', $project->id)
                           ->value('mana_screw');

        $match_results = DB::table('matches')
                           ->selectRaw('archetypes.id as opponent_archetype_id,
                                        archetypes.name as opponent_archetype_name,
                                        COUNT(games.num = 1 OR NULL) as match_count,
                                        FORMAT(COUNT(games.num = 1 AND matches.result = "W" OR NULL) / COUNT(games.num = 1 OR NULL) * 100, 2) as match_win_percentage,
                                        FORMAT(COUNT(games.result = "W" AND games.first = "P" OR NULL) / COUNT(games.first = "P" OR NULL) * 100, 2) as play_first_win_percentage,
                                        FORMAT(COUNT(games.result = "W" AND games.first = "D" OR NULL) / COUNT(games.first = "D" OR NULL) * 100, 2) as draw_first_win_percentage,
                                        FORMAT(COUNT(games.result = "W" AND games.num = 1 OR NULL) / COUNT(games.num  = 1 OR NULL) * 100, 2) as mainboard_win_percentage,
                                        FORMAT(COUNT(games.result = "W" AND games.num != 1 OR NULL) / COUNT(games.num != 1 OR NULL) * 100, 2) as sideboard_win_percentage')
                           ->join('games'     , 'games.match_id'               ,'matches.id')
                           ->join('projects'  , 'matches.project_id'           ,'projects.id')
                           ->join('archetypes', 'matches.opponent_archetype_id','archetypes.id')
                           ->where('matches.project_id', $project->id)
                           ->groupBy('archetypes.id'   , 'archetypes.name')
                           ->get();

        return view('projects.show', compact('project', 'archetypes', 'formats', 'format_terms', 'archetype', 'mulligan1', 'mulligan2', 'mulligan3',
            'mana_flood', 'mana_screw', 'match_results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
