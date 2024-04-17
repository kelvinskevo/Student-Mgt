@extends('layout')
@section('content')
    <div class="container">

        <div class="mt-3 card col-6 offset-3">
            @include('messages')
            <div class="card-header">Edit Course</div>

            <div class="card-body">


                <form action="/batches/{{ $batch->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Batch Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $batch->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course Id</label>
                        <input type="text" name="course_id" class="form-control" value="{{ $batch->course_id }}">
                    </div>
                    <div class="mb-3">
                        <label>start date </label>
                        <input type="date" name="start_date" class="form-control" value="{{ $batch->start_date }}"></br>
                    </div>
                    <input type="submit" value="Update" class="btn btn-success form-control"></br>
                </form>

            </div>
        </div>
    </div>

@stop
