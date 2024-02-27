@extends('layout')
@section('content')
    <div class="card col-6 offset-3">
        <div class="card-header">batchs Page</div>
        <div class="card-body">
            @include('messages')

            <form action="/enrollments" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">Enrollment No</label>
                    <input type="text" name="enrollment_no" class="form-control rounded">
                </div>

                <div class="mb-3">
                    <label for="batch_id" class="form-label">Select batch:</label>
                    <select class="form-control" name="batch_id">
                        @foreach ($batches as $batch)
                            <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Student:</label>
                    <select class="form-control" name="student_id">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name">Join Date</label>
                    <input type="date" class="form-control" name="join_date"
                        min="{{ date('Y-m-d')>
                </div>
                <div class="mb-3">
                    <label for="name">Fee</label>
                    <input type="number" class="form-control" name="fee">
                </div>

                <button type="submit" class="btn btn-primary form-control">Create Enrollment</button>
            </form>


        </div>
    </div>
@endsection
