@extends('layouts.master')

@section('title')
    Dashboard | Students
@endsection


@section('content')
    <h3 class="center-align">Show Internships in:</h3>

    <div class="row">

        <div class="col s12 m12 l12 center-align">
            <div class="card-panel">
                <a href="{{route('list', ['internship_type' => 'Company'])}}">Company</a>
            </div>
        </div>

        <div class="col s12 m12 l12 center-align">
            <div class="card-panel">
                <a href="{{route('list', ['internship_type' => 'Startup Company'])}}">Startup Company</a>
            </div>
        </div>

        <div class="col s12 m12 l12 center-align">
            <div class="card-panel">
                <a href="{{route('list', ['internship_type' => 'Research Project'])}}">Research Project</a>
            </div>
        </div>

        <div class="col s12 m12 l12 center-align">
            <div class="card-panel">
                <a href="{{route('list', ['internship_type' => 'MAC Project'])}}">MAC Project</a>
            </div>
        </div>

        <div class="col s12 m12 l12 center-align">
            <div class="card-panel">
                <a href="{{route('list', ['internship_type' => 'Other'])}}">Other</a>
            </div>
        </div>

    </div>

@endsection