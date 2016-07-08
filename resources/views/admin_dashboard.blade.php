@extends('layouts.master')

@section('title')
    Dashboard | Admin
@endsection


@section('content')
    <h3 class="center-align">Notifications</h3>

    <div class="row">

        {{--@foreach($notifications as $notification)--}}

        <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
            <div class="card-panel white">
                <a href="{{route('username', ['username' => 'parthchokshi12'])}}">Parth Chokshi</a> has shown interest for the job at <a href="{{route('internship_type', ['company_name' => 'ibm'])}}">IBM</a> for the post of <a
                        href="{{route('skills', ['skill_name' => 'web_development'])}}">Web development</a>
            </div>
        </div>

        {{--@endforeach--}}

    </div>

@endsection