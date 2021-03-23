<?php

namespace App\Http\Controllers;

use App\Models\Team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function crateTeam(Request $request)
    {
//        dd(1);
        $val = $request->validate([
            'name' => 'required|string|max:16',
        ]);

        Team::create($val);

        return redirect()->route('getTeam');
    }


    public function getTeam()
    {
        $taems = new Team();

        return view('getTeam',

            ['teams' => $taems->get()]);


//        return response()->json([
//            'status' => 1,
//            'data' => Team::where('id', $id)->get()
//        ]);
    }

//
    public function teamUpdate(Request $request, $id)
    {
        $val = $request->validate([
            'name' => 'required|string|max:16',
        ]);

        $team = Team::where('id', $id)->update($val);

        return response()->json([
            'status' => 1,
            'data' => $team
        ]);


    }

}
