@extends('layout')
@section('content')

    <div class="card">
        @include('messages')
        <div class="card-header">Edit Course</div>

        <div class="card-body">


            <form action="/courses/{{ $course->id }}" method="post">
                @csrf
                @method('PUT')
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}"></br>
                <label>Syllabus</label></br>
                <input type="text" name="syllabus" id="syllabus" class="form-control"
                    value="{{ $course->syllabus }}"></br>
                <label>Duration (Months)</label></br>
                <input type="text" name="duration" id="duration" class="form-control"
                    value="{{ $course->duration }}"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
