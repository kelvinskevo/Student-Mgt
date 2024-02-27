@extends('layout')
@section('content')
    <div class="container">

        <div class="card col-6 offset-3 mt-3">
            @include('messages')
            <div class="card-header">Edit Payment</div>

            <div class="card-body">


                <form action="/payments/{{ $payment->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="batch_id" class="form-label">Enrollment</label>
                        <select class="form-control" name="enrollment_id">
                            @foreach ($enrollments as $enroll)
                                <option value="{{ $enroll->id }}">{{ $enroll->enrollment_no }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name">Paid Date</label>
                        <input type="date" name="paid_date" class="form-control rounded"
                            value="{{ $payment->paid_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="name">Amount</label>
                        <input type="text" class="form-control" name="amount" value="{{ $payment->amount }}">
                    </div>
                    <input type="submit" value="Update" class="btn btn-success form-control"></br>
                </form>

            </div>
        </div>
    </div>

@stop
