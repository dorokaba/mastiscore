<?php

namespace App\Http\Controllers;

use App\Project;
use App\Format;
use App\FormatTerm;
use App\Archetype;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArchetypeController extends Controller
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

        return view('archetypes.index', ['projects' => $projects, 'formats' => $formats, 'archetypes' => $archetypes,
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
        $format_has_terms          = Format::where('id', $request->format_id)->value('has_terms');

        $archetype                 = new Archetype;
        $archetype->id             = str_random(32);
        $archetype->user_id        = 'test0000000000000000000000000000';
        $archetype->format_id      = $request->format_id;
        $archetype->format_term_id = $format_has_terms ? $request->format_term_id : null;
        $archetype->name           = $request->name;
        $archetype->color          = is_array($request->color)        ? implode($request->color)        : null;
        $archetype->splash_color   = is_array($request->splash_color) ? implode($request->splash_color) : null;
        $archetype->created_at     = Carbon::now();
        $archetype->updated_at     = Carbon::now();

        $archetype->save();

        return redirect()->to($request->back_to);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archetype  $archetype
     * @return \Illuminate\Http\Response
     */
    public function show(Archetype $archetype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archetype  $archetype
     * @return \Illuminate\Http\Response
     */
    public function edit(Archetype $archetype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archetype  $archetype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archetype $archetype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archetype  $archetype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archetype $archetype)
    {
        //
    }
}
