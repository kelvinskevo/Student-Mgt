@extends('layout')
@section('content')

    <div class="card">
        @include('messages')
        <div class="card-header">Details Page</div>

        <div class="card-body">
            <h5 class="card-title">Name : {{ $teacher->name }}</h5>
            <p class="card-text">Address : {{ $teacher->address }}</p>
            <p class="card-text">Mobile : {{ $teacher->mobile }}</p>


        </div>
    </div>

@stop
