@extends('layouts.master')

@section('title')
    Add | Jobs
@endsection

@section('content')


    <div class="row"></div>

    <form action="{{route('add-jobs')}}" class="col s12" method="post">

        <div class="row center-align">

            <div class="input-field col s12">
                <select name="degree_type">
                    <option value="" selected>Choose your option</option>
                    <option value="0">Undergraduate</option>
                    <option value="1">Graduate</option>
                </select>
                <label>Degree Type</label>
            </div>

            <div class="input-field col s6">
                <input id="Major" name="major" type="text" class="validate">
                <label for="Major">Major</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="gpa" id="gpa">
                <label for="gpa">Degree GPA</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="university" id="university">
                <label for="university">University</label>
            </div>

            <div class="col input-field s6">
                <input type="text" name="location" id="location">
                <label for="location">Location</label>
            </div>

            <div class="col input-field s6">
                <input type="text" name="certification" id="certification">
                <label for="certification">Certification Title</label>
            </div>

            <div class="col input-field s6">
                <input type="text" id="body" name="body">
                <label for="body">Certification Body</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>

            <input type="hidden" name="_token" value="{{Session::token()}}">
        </div>
    </form>

@endsection