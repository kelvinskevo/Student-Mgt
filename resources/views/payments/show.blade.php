@extends('layout')
@section('content')

    <div class="card">
        @include('messages')
        <div class="card-header">Contactus Page</div>

        <div class="card-body">
            <h5 class="card-title">Enrollment : {{ $payment->enrollment->enrollment_no }}</h5>
            <p class="card-text">Payment Date : {{ $payment->paid_date }}</p>
            <p class="card-text">Amount : {{ $payment->amount }}</p>


        </div>
    </div>

@stop
