<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Fixture;
use App\Score;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search()
    {
        return view('search');
    }

    public function week_1()
    {
        return view('week-1');
    }

    public function week_2()
    {
        return view('week-2');
    }

    public function vs()
    {
        $scores = Score::orderBy('created_at', 'desc')->get();
        return view('view-score')->with('scores', $scores);
    }

    public function table()
    {
        $tables = Team::orderBy('PTS', 'desc')->get();
        return view('table')->with('tables', $tables);
    }

    public function fixture()
    {
        return view('fixture');
    }

    public function view()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('view')->with('teams', $teams);
    }

    public function view_fixture($id)
    {
        $fixtures = Fixture::find($id);
        return view('view-week-1')->with('fixtures', $fixtures);
    }

    public function view_fixture2($id)
    {
        $fixtures = Fixture::find($id);
        return view('view-week-2')->with('fixtures', $fixtures);
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('edit')->with('team', $team);
    }

    public function update($id)
    {
        $team = Team::find($id);
        return view('update')->with('team', $team);
    }

    public function view_team($id)
    {
        $team = Team::find($id);
        return view('view-team')->with('team', $team);
    }

    public function delete($id)
    {
        
        $team = Team::find($id);
        
        if($team ->team_logo != 'noimage.png') {
            //Delete Image
            Storage::delete('public/profile_images/'.$team->team_logo);
        }
        $team ->delete();
        return redirect('/home')->with('success', 'Team Record Deleted Successfully!');
    }
}
