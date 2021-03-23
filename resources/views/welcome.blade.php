@extends('app.master')



@section('content')

    <h3 class="p-3 mb-2 bg-success text-white text-center">Create New Team</h3>
    <form class="form_bg" action="{{route('crateTeam')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <input type="text" name="name" id="form1Example1" class="form-control"/>
            <label class="form-label" for="form1Example1">Crate name Team</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">crate</button>
    </form>


@endsection
