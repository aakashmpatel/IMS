@extends('layouts.master')

@section('title')
    List
@endsection


@section('content')

    <div class="row">
        <div class="col s12 m12 l12">
            <h4>List</h4>
            @foreach($internship as $each_internship)
                <article>
                    <div class="col s12 m12 l12">

                        <div class="card-panel">
                            <div class="row">


                            <span class="col s12 m4 l4">{{$each_internship->company_name}}</span>
                            {{--<a class="col s12 m4 l4" style="margin-top: 1.5%" href="{{$each_internship->company_website}}" _target=blank>{{$each_internship->company_website}}</a>--}}
                            <span class="col s12 m4 l4">{{$each_internship->internship_type}}</span>
                            <span class="col s12 m4 l4">{{$each_internship->country}}</span>
                            </div>

                            <div class="row">
                                <span class="col s12 m4 l4">{{$each_internship->contact_first_name}} {{$each_internship->contact_last_name}}</span>
                                <span class="col s12 m4 l4"><a href="tel:{{$each_internship->telephone}}">{{$each_internship->telephone}}</a></span>
                                <span class="col s12 m4 l4"><a href="mailto:{{$each_internship->email}}">{{$each_internship->email}}</a></span>
                            </div>

                            <div class="row">
                                <span class="col s12 m4 l4">
                                    <a href="{{$each_internship->company_website}}">{{$each_internship->company_website}}</a>
                                </span>
                                <span class="col s12 m4 l4">
                                    <p>{{$each_internship->address}}</p>
                                </span>
                                <span class="col s12 m4 l4">
                                    <p>{{$each_internship->notes}}</p>
                                </span>
                            </div>

                            <div class="row">
                                @if(Auth::user()->email == "admin@uwindsor.ca")

                                    <a href="route('edit')">Edit</a>
                                    <a href="route('delete')">Delete</a>

                                @else

                                    {{--@foreach($notification_ids as $notification)--}}
                                    {{--@if(Auth::user())--}}
                                        <a href="{{route('add-interest', ['id'  => $each_internship->id , 'internship_type' => $each_internship->internship_type] )}}">Add to interest list</a>
                                    {{--@else--}}
                                        <a href="{{route('remove-interest', ['id'  => $each_internship->id, 'internship_type' => $each_internship->internship_type])}}">Remove from interest list</a>
                                    {{--@endif--}}
                                    {{--@endforeach--}}

                                @endif
                            </div>
                        </div>

                    </div>


                </article>
            @endforeach
        </div>
    </div>

@endsection