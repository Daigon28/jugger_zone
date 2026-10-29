<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){ // listar equipos
        $teams = Team::orderBy('id','desc')->get();

        // return $teams;
        return view('teams.index', compact('teams'));
    }
    
    public function create(){ // crear teamo
        return view('teams.create');
    }

    public function store(Request $request){ // guardar teamo
        $team = new team();

        $team->name       = $request->name ;
        $team->slug       = $request->slug;
        $team->description = $request->description ;

        // return $team;
        $team->save();

        return redirect()->route('team.index');
    }

    public function edit($team){ // editar teamo
        $team = team::find($team);
        return view('teams.create',compact("team"));
    }

    public function update($team, Request $request){ // update info7 teamo
        $team = team::find($team);

        $team->name       = $request->name;
        $team->slug       = $request->slug;
        $team->description = $request->description;

        $team->save();
        
        return redirect()->route('team.index');
    }
    
    public function destroy($team){ // update info7 teamo
        $team = team::find($team);
        $team->delete();
        return redirect()->route('team.index');
    }

    public function show(Team $team){ // mostrar teamo
        // $team = team::find($team);
        return view('teams.team',[
            'team' => $team
        ]);
        
    }
}
