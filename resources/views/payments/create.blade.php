@extends('layout')
@section('content')
    <div class="card col-6 offset-3">
        <div class="card-header">Payments</div>
        <div class="card-body">
            @include('messages')

            <form action="/payments" method="POST">
                @csrf
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
                    <input type="date" name="paid_date" class="form-control rounded">
                </div>

                <div class="mb-3">
                    <label for="name">Amount</label>
                    <input type="text" class="form-control" name="amount">
                </div>

                <button type="submit" class="btn btn-primary">Complete Payment</button>
            </form>


        </div>
    </div>
@endsection
