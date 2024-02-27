@extends('layout')
@section('content')

    <div class="card">
        @include('messages')
        <div class="card-header">
            <p class="card-text">{{ $enrollment->student->name }}</p>
        </div>

        <div class="card-body">
            <p class="card-text">Enrollment NO : {{ $enrollment->enrollment_no }}</h5>
            <p class="card-text">Batch : {{ $enrollment->batch->name }}</p>
            <p class="card-text">Student : {{ $enrollment->student->name }}</p>
            <p class="card-text">Join Date : {{ $enrollment->join_date }}</p>
            <p class="card-text">Fee : {{ $enrollment->fee }}</p>

        </div>
    </div>

@stop
