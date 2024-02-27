@extends('layout')
@section('content')

    <div class="card">
        @include('messages')
        <div class="card-header">Contactus Page</div>

        <div class="card-body">
            <h5 class="card-title">Name : {{ $course->name }}</h5>
            <p class="card-text">Syllabus : {{ $course->syllabus }}</p>
            <p class="card-text">Duration : {{ $course->duration }}</p>


        </div>
    </div>

@stop
