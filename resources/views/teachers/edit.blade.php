@extends('layout')
@section('content')

    <div class="card">
        @include('messages')
        <div class="card-header">Teacher Details</div>

        <div class="card-body">


            <form action="/teachers/{{ $teacher->id }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $teacher->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $teacher->name }}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{ $teacher->address }}"
                    class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" value="{{ $teacher->mobile }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
