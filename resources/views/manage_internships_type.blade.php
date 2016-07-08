@extends('layouts.master')

@section('title')
    Manage Internships
@endsection

@section('content')

    @include('includes.message')

    <div class="row">
        <div class="container">


        <div class="col s12 m12 l12">

            @foreach($internships_type as $internship_type )
            <article>
                <div class="col s12 m12 l12 center-align">
                    <div class="card-panel">
                        <p>{{$internship_type->internship_type}}</p>
                        <a href="{{route('manage-internships-type',
                        ['edit'  => "edit", 'id'=> $internship_type->id])}}">
                            Edit
                        </a>
                        <a href="{{route('manage-internships-type',
                        ['delete'   => "delete", 'id'   => $internship_type->id])}}">
                            delete
                        </a>
                    </div>
                </div>
            </article>

            @endforeach

            </div>
        </div>
    </div>

@endsection
