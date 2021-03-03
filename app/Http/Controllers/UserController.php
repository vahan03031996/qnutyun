<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registr(Request $request)
    {

        $val = $request->validate([
            'name' => 'required|string|max:16',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'brfDate' => 'required|date'
        ]);

        User::create($val);

    }


    public function userGet(User $user)
    {

        return response()->json([
            'status' => 1,
            'data' => $user->get()
        ]);
    }

    public function userUpdate(Request $request, $id)
    {
        $val = $request->validate([
            'name' => 'required|string|max:16',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'brfDate' => 'required|date'
        ]);

        $user = User::where('id', $id)->update($val);

        return response()->json([
            'status' => 1,
            'data' => $user
        ]);


    }

    public function userDelete( $id)
    {


        User::where('id', $id)->delete();


    }

    public function userPaginate(User $user)
    {

        return response()->json([
            'status' => 1,
            'data' => $user->simplePaginate(3)
        ]);
    }


    public function userPost(Request $request){
        $validated = $request->validate([
            'data' => 'required|min:1|max:256'
        ]);

        Post::create($validated);


    }

    public function userPostDelete($id){


        Post::where('id', $id)->delete();


    }


}
