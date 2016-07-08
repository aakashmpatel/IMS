@extends('layouts.master')

@section('title')
    Students Dashboard
@endsection

@section('content')

    @include('includes.message')

    <div class="row">
        <div class="col s12 m12 l12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#addStudent">Add Students</a></li>
                <li class="tab col s3"><a href="#addedStudent">Added Students</a></li>
            </ul>
        </div>

        <div id="addStudent" class="col s12 m12 l12 tab-content">

            <div class="row">

                <form class="col s12" action="{{route('create-student')}}" method="post">

                    <div class="row">

                        <div class="input-field col s6 m6 l6">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field col s6 m6 l6">
                            <input id="student_id" name="student_id" type="number" maxlength="9">
                            <label for="student_id">Student ID</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col s6 m6 l6">
                            <select name="semester">
                                <option value="" selected>Choose your Semester</option>
                                <option value="Fall">Fall</option>
                                <option value="Winter">Winter</option>
                            </select>
                            <label>Semester</label>
                        </div>

                        <div class="input-field col s6 m6 l6">
                            <select name="year">
                                <option value="" selected>Choose your Year</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                            </select>
                            <label>Year</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <input id="student_first_name" name="student_first_name" type="text">
                            <label for="student_first_name">First Name</label>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <input id="student_middle_name" name="student_middle_name" type="text">
                            <label for="student_middle_name">Middle Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <input id="student_last_name" name="student_last_name" type="text">
                            <label for="student_last_name">Last Name</label>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <input id="telephone" name="telephone" type="number" maxlength="10">
                            <label for="telephone">Telephone</label>
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-field col s6 m6 l6">
                            <select name="gender">
                                <option value="1" selected>Male</option>
                                <option value="0">Female</option>
                            </select>
                            <label>Year</label>
                        </div>

                        <div class="input-field col s6 m6 l6">
                            <select name="status">
                                <option value="" selected>Choose your Status</option>
                                <option value="1">International Student</option>
                                <option value="0">Permanant Resident/Citizen</option>
                            </select>
                            <label>Year</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action">Create Student Account
                        <i class="material-icons right">send</i>
                    </button>

                    <input type="hidden" name="_token" value="{{Session::token()}}">

                </form>

            </div>


        </div>
        <div id="addedStudent" class="col s12 m12 l12 tab-content">
            <div class="row">
            @foreach($students as $student)
                <div class="card-panel col s12" style="margin:10px;">
                    <p>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
                    <p><a href="mailto:{{$student->email}}">{{$student->email}}</a></p>
                    <p>{{$student->student_id}}</p>
                    <p>{{$student->semester_term}}</p>
                    <p>{{$student->semester_year}}</p>
                    <p><a href="tel:{{$student->telephone}}">{{$student->telephone}}</a></p>
                    <p>@if($student->gender == 1)
                           Male
                           @else
                        Female
                           @endif
                    </p>
                    <p>@if($student->status == 1)
                           International Student
                           @else
                        Permanant Residence / Citizen
                           @endif
                    </p>
                </div>
            @endforeach
            </div>
        </div>

    </div>


@endsection