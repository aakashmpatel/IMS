@extends('layouts.master')

@section('title')
    Search
@endsection

@section('content')

    <div class="row">
        @foreach($students as $student)
            <div class="row">
                <div class="card-panel col s6">
                    <p><a href="mailto:{{$student->email}}">{{$student->email}}</a></p>
                    <p>{{$student->student_id}}</p>
                    <p>{{$student->semester_term}}</p>
                    <p>{{$student->semester_year}}</p>
                    <p>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
                    <p><a href="tel:{{$student->telephone}}">{{$student->telephone}}</a></p>
                    <p>
                        @if($student->gender == 1)
                            Male
                            @else
                        Female
                            @endif
                    </p>
                    <p>
                        @if($student->status ==1)
                            International Student
                            @else
                        Permanant Resident/Citizen
                            @endif
                    </p>
                </div>
            </div>
        @endforeach

            @foreach($internships as $internship)
                <div class="row">
                    <div class="card-panel col s6">
                        <p>{{$internship->company_name}}</p>
                        <p>{{$internship->address}}</p>
                        <p>{{$internship->city}}</p>
                        <p>{{$student->semester_year}}</p>
                        <p>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
                        <p><a href="tel:{{$student->telephone}}">{{$student->telephone}}</a></p>
                        <p>
                            @if($student->gender == 1)
                                Male
                            @else
                                Female
                            @endif
                        </p>
                        <p>
                            @if($student->status ==1)
                                International Student
                            @else
                                Permanant Resident/Citizen
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach

            @foreach($educations as $education)
                <div class="row">
                    <div class="card-panel col s6">
                        <p>Degree Type:
                            @if($education->degree_type == 0)
                                Undergraduate
                                @else
                            Graduate
                                @endif
                        </p>
                        <p>Major: {{$education->major}}</p>
                        <p>GPA: {{$education->degree_gpa}}</p>
                        <p>Year: {{$student->semester_year}}</p>
                        <p>Name: {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
                        <p>Tel: <a href="tel:{{$student->telephone}}">{{$student->telephone}}</a></p>
                        <p>Gender:
                            @if($student->gender == 1)
                                Male
                            @else
                                Female
                            @endif
                        </p>
                        <p>
                            @if($student->status ==1)
                                International Student
                            @else
                                Permanant Resident/Citizen
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach

    </div>
@endsection