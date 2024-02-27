@extends('layout')
@section('content')
    <div class="card col-6 offset-3">
        <div class="card-header">batchs Page</div>
        <div class="card-body">
            @include('messages')

            <form action="/enrollments/{{ $enrollment->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name">Enrollment No</label>
                    <input type="text" name="enrollment_no" class="form-control rounded"
                        value="{{ $enrollment->enrollment_no }}">
                </div>

                <div class="mb-3">
                    <label for="batch_id" class="form-label">Select batch:</label>
                    <select class="form-control" name="batch_id">
                        @foreach ($batches as $batch)
                            <option value="{{ $batch->id }}" {{ $enrollment->batch_id == $batch->id ? 'selected' : '' }}>
                                {{ $batch->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Student:</label>
                    <select class="form-control" name="student_id">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}"
                                {{ $enrollment->student_id == $student->id ? 'selected' : '' }}>{{ $student->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name">Join Date</label>
                    <input type="date" class="form-control" name="join_date" value="{{ $enrollment->join_date }}">
                </div>
                <div class="mb-3">
                    <label for="name">Fee</label>
                    <input type="number" class="form-control" name="fee" value="{{ $enrollment->fee }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Enrollment</button>
            </form>


        </div>
    </div>
@endsection
