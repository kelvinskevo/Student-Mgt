@extends('layout')
@section('content')

    <div class="card">
        @include('messages')
        <div class="card-header">Contactus Page</div>

        <div class="card-body">
            <h5 class="card-title">Batch Name : {{ $batch->name }}</h5>
            <p class="card-text">Course : {{ $batch->course->name }}</p>
            <p class="card-text">Start DAte : {{ $batch->start_date }}</p>


        </div>
    </div>

@stop
