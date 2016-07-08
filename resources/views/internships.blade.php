@extends('layouts.master')

@section('title')
    Internships
@endsection

@section('content')

    <div class="row">

        <div class="col s12 m12 l12">
            <h4>Add Internship in:</h4>
            <div class="col s12 m12 l12">
                <div class="card-panel white center-align">
                    <a href="{{route('internship_type', ['type'  => 'Company'])}}">Company</a>
                </div>
            </div>

            <div class="col s12 m12 l12">
                <div class="card-panel white center-align">
                    <a href="{{route('internship_type', ['type'  => 'Startup Company'])}}">Startup Company</a>
                </div>
            </div>

            <div class="col s12 m12 l12">
                <div class="card-panel white center-align">
                    <a href="{{route('internship_type', ['type' => 'Research Project'])}}">Research Project</a>
                </div>
            </div>

            <div class="col s12 m12 l12">
                <div class="card-panel white center-align">
                    <a href="{{route('internship_type', ['type' => 'MAC Projects'])}}">MAC Project</a>
                </div>
            </div>

            <div class="col s12 m12 l12">
                <div class="card-panel white center-align">
                    <a href="{{route('internship_type', ['type' => 'Other'])}}">Other</a>
                </div>
            </div>

        </div>

    </div>

@endsection