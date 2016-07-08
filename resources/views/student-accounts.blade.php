@extends('layouts.master')

@section('title')
    Accounts
    @endsection

@section('content')

    <div class="row">

        <h3>Education</h3>
        <a href="{{route('add-education')}}">Add</a>

    </div>

    <div class="row">

        @foreach($educations as $education)
        <div class="card-panel col s12" style="margin:10px;">
            <p>@if($education->degree_type == 1)
                Graduate
                   @else
                Undergraduate
                   @endif
            </p>
            <p>{{$education->major}}</p>
            <p>{{$education->degree_gpa}}</p>
            <p>{{$education->university_name}}</p>
            <p>{{$education->university_location}}</p>
            <p>{{$education->certification_title}}</p>
            <p>{{$education->certification_body}}</p>
        </div>
        @endforeach

    </div>

    <div class="row">
        <h3>Internship Status</h3>
        <div class="row">

            <div class="card-panel col s12">

            </div>

        </div>
    </div>
@endsection