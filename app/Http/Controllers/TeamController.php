<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('team');
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'year' => 'required',
            'home_city' => 'required',
            'stadium' => 'required',
            'players' => 'required',
            'coach_name' => 'required',
            'captain_name' => 'required',
            'website' => 'required',
            'short' => 'required',
            'team_logo' => 'image|nullable|max:1999'
        ]);

        //Handle File upload
        if($request->hasFile('team_logo')){
            //Get filename with extension
            $filenameWithExt = $request->file('team_logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('team_logo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('team_logo')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        //Create Team
        $team = new Team;
        $team->name = $request->input('name');
        $team->year = $request->input('year');
        $team->home_city = $request->input('home_city');
        $team->stadium = $request->input('stadium');
        $team->players = $request->input('players');
        $team->coach_name = $request->input('coach_name');
        $team->email = $request->input('email');
        $team->captain_name = $request->input('captain_name');
        $team->website = $request->input('website');
        $team->short = $request->input('short');
        $team->team_logo = $fileNameToStore;
        $team->save();

        return redirect('/team')->with('success', 'Team Created Successfully!');
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
        $team = Team::find($id);
        return view('view-team')->with('team', $team);
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
        $team = Team::find($id);
        return view('edit')->with('team', $team);

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
            'name' => 'required',
            'email' => 'required',
            'year' => 'required',
            'home_city' => 'required',
            'stadium' => 'required',
            'players' => 'required',
            'coach_name' => 'required',
            'captain_name' => 'required',
            'website' => 'required',
            'team_logo' => 'image|nullable|max:1999'
        ]);

        //Handle File upload
        if($request->hasFile('team_logo')){
            //Get filename with extension
            $filenameWithExt = $request->file('team_logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('team_logo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('team_logo')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        //Create Team
        $team = Team::find($id);
        $team->name = $request->input('name');
        $team->year = $request->input('year');
        $team->home_city = $request->input('home_city');
        $team->stadium = $request->input('stadium');
        $team->players = $request->input('players');
        $team->coach_name = $request->input('coach_name');
        $team->email = $request->input('email');
        $team->captain_name = $request->input('captain_name');
        $team->website = $request->input('website');
        $team->team_logo = $fileNameToStore;
        $team->save();

        return redirect('/home')->with('success', 'Team Record Updated Successfully!');
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
