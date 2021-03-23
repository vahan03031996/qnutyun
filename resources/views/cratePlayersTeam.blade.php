@extends('app.master')



@section('content')
    @foreach($teamsName as $teamName)

        <h1 class="p-3 mb-2 bg-success text-white text-center">{{$teamName->name}}</h1>


    @endforeach
    <div class="container">
        <form class="form_bg" action="{{route('cratePlayer', $teamName->id)}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
                <input type="text" name="firstName" id="form1Example1" class="form-control"/>
                <label class="form-label" for="form1Example1">Players firstName</label>
            </div>
            <div class="form-outline div_inp ">
                <input type="text" name="lastName" id="form1Example1" class="form-control"/>
                <label class="form-label" for="form1Example1">Players lastName</label>
            </div>


            <button type="submit" class="btn btn-primary btn-block">crate</button>
        </form>
    </div>


@endsection
