<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class PointController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'G' => 'required',
            'L' => 'required',
            'W' => 'required',
            'PTS' => 'required',
            'D' => 'required'
        ]);

        //Create Team
        $team = Team::find($id);
        $team->G = $team->G + $request->input('G');
        $team->W = $team->W + $request->input('W');
        $team->L = $team->L + $request->input('L');
        $team->D = $team->D + $request->input('D');
        $team->PTS = $team->PTS + $request->input('PTS');
        $team->save();

        return redirect('/home')->with('success', 'Point Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
