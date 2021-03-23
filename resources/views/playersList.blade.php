@extends('app.master')



@section('content')
    @foreach($teamsName as $teamName)
        <h3 class="p-3 mb-2 bg-success text-white text-center">{{$teamName->name}}</h3>
    @endforeach
    <button class="btn btn-light"><a href="{{route('getTeam')}}">Team</a></button>
    @foreach($players as $player)

        <ul>
            <h3 class="p-3 mb-2 bg-secondary text-white">{{$player->firstName}}</h3>
        </ul>

    @endforeach
@endsection
