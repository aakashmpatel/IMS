@extends('layouts.master')

@section('title')
    {{$internship_type}} | Internships
@endsection

@section('content')

        @include('includes.message')
        
        <div class="row">
            <div class="col s12 m6 l6 left-align">
                <h4>Add details</h4>
            </div>
            <div class="col s12 m6 l6 right-align">
                <a href="{{route('list', ['internship_type' => $internship_type])}}">List all</a>
            </div>
        </div>

        <div class="row">
            <form class="col s12 m12 l12" action="{{route('addInternships', ['internship_type'=>$internship_type])}}" method="post">

                <div class="row">
                    <div class="input-field col s12">
                        <input @if($internship_type == "Research Project"  || $internship_type == "MAC Projects") value="University of Windsor" @endif id="company_name" name="company_name" type="text" class="validate">

                        <label @if($internship_type == "Research Project" || $internship_type == "MAC   Projects") class="active" @endif  for="company_name">Company Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="select_country" name="select_country" type="text" class="validate">
                        <label for="select_country">Country</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="select_city" name="select_city" type="text" class="validate">
                        <label for="select_city">City</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="postal_code" name="postal_code" type="text" class="validate">
                        <label for="postal_code">Postal Code</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="contact_first_name" name="contact_first_name" type="text" class="validate">
                        <label for="contact_first_name">Contact Person's First Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="contact_last_name" name="contact_last_name" type="text" class="validate">
                        <label for="contact_last_name">Contact Person's Last Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="contact_position" name="contact_position" type="text" class="validate">
                        <label for="contact_position">Contact Person's Position</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="telephone" type="number" name="telephone" class="validate">
                        <label for="telephone">Telephone Number</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="company_website" name="company_website" type="url" class="validate">
                        <label for="company_website">Company Website</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="address" name="address" class="materialize-textarea"></textarea>
                        <label for="address">Address</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="notes" name="notes" class="materialize-textarea"></textarea>
                        <label for="notes">Notes</label>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>

                <button class="btn waves-effect waves-light" type="reset" name="action">Reset
                    <i class="material-icons right">close</i>
                </button>

            </form>

        </div>
@endsection