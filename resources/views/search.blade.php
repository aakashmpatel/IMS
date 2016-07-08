@extends('layouts.master')

@section('title')
    Search
@endsection

@section('content')

    <div class="row">
        @foreach($educations as $education)
            <div class="chip"><a href="{{route('get-search', ['v' => $education->major])}}">{{$education->major}}</a></div>
            <div class="chip"><a href="{{route('get-search', ['v' => $education->university_name])}}">{{$education->university_name}}</a></div>
            <div class="chip"><a href="{{route('get-search', ['v' => $education->university_location])}}">{{$education->university_location}}</a></div>
            <div class="chip"><a href="{{route('get-search', ['v' => $education->certification_title])}}">{{$education->certification_title}}</a></div>
            <div class="chip"><a href="{{route('get-search', ['v' => $education->certification_body])}}">{{$education->certification_body}}</a></div>
        @endforeach

            @foreach($internships as $internship)
                <div class="chip"><a href="{{route('get-search', ['v' => $internship->company_name])}}">{{$internship->company_name}}</a></div>
                <div class="chip"><a href="{{route('get-search', ['v' => $internship->city])}}">{{$internship->city}}</a></div>
                <div class="chip"><a href="{{route('get-search', ['v' => $internship->country])}}">{{$internship->country}}</a></div>
                <div class="chip"><a href="{{route('get-search', ['v' => $internship->internship_type])}}">{{$internship->internship_type}}</a></div>
            @endforeach

            @foreach($students as $student)
                <div class="chip"><a href="{{route('get-search', ['v' => $student->semester_term])}}">{{$student->semester_term}}</a></div>
                <div class="chip"><a href="{{route('get-search', ['v' => $student->semester_year])}}">{{$student->semester_year}}</a></div>
            @endforeach
    </div>
@endsection