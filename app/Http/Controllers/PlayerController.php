<?php

namespace App\Http\Controllers;

use App\Models\player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function cratePlayersTeam($id)
    {

        return view('cratePlayersTeam',
            ['teamsName' => Team::where('id', $id)->get()]);


    }

    public function cratePlayer(Request $request, $id)
    {

        $val = $request->validate([
            'firstName' => 'required|string|max:16',
            'lastName' => 'required|string|max:16',

        ]);

        $val['teams_id'] = $id;

        player::create($val);
//            return redirect()->route('getPlayer');

        return view('playersList',
            ['teamsName' => Team::where('id', $id)->get()],
            ['players' => player::where('teams_id', $id)->get()]);


    }


    public function getPlayer($id)
    {

        $players = new player();

        return view('playersList',
            ['teamsName' => Team::where('id', $id)->get()],
            ['players' => player::where('teams_id', $id)->get()]);


        //        return response()->json([
        //            'status' => 1,
        //            'data' => player::where('id', $id)->get()
        //        ]);
    }

    //
    public function teamPlayer(Request $request, $id)
    {
        $val = $request->validate([
            'firstName' => 'required|string|max:16',
            'lastName' => 'required|string|max:16',
        ]);

        $player = player::where('id', $id)->update($val);

        return response()->json([
            'status' => 1,
            'data' => $player
        ]);


    }
}
