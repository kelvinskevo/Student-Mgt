@extends('layout')
@section('content')
    <div class="card col-6 offset-3">
        <div class="card-header">batchs Page</div>
        <div class="card-body">
            @include('messages')

            <form action="/batches" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">Batch Name:</label>
                    <input type="text" name="name" class="form-control rounded">
                </div>

                <div class="mb-3">
                    <label for="batch_id" class="form-label">Select Course:</label>
                    <select class="form-control" name="course_id">
                        @foreach ($batchs as $batch)
                            <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="name">Start Date</label>
                    <input type="date" class="form-control" name="start_date">
                </div>





                <button type="submit" class="btn btn-primary">Create Batch</button>
            </form>


        </div>
    </div>
@endsection
