@extends('app.master')



@section('content')
    <button class="btn btn-dark"><a href="{{route('crateNewTeam')}}">Create New Team</a></button>
    @foreach($teams as $team)

        <ul>
            <h3 class="p-3 mb-2 bg-success text-white text-center">{{$team->name}}</h3>
            <button class="btn btn-light"><a href="{{route('cratePlayersTeam' , $team->id)}}">cratePlayer</a></button>
            <button class="btn btn-light"><a href="{{route('getPlayer' , $team->id)}}">getPlayer</a></button>
        </ul>

    @endforeach
@endsection
