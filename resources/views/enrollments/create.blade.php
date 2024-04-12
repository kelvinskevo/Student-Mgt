@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Batches

            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/enrollments">Enrollments</a></li>
                <li class="active">Add New Enrollment</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Batch</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('messages')


                        <form action="/enrollments" method="POST" role="form">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Enrollment No</label>
                                    <input type="text" name="enrollment_no"
                                        class="form-control @error('enrollment_no') is-invalid @enderror" id="enrollment_no"
                                        placeholder="Enter enrollment_no" value="{{ old('enrollment_no') }}">
                                    @error('enrollment_no')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Select Batch</label>
                                    <select class="form-control" name="batch_id" value="{{ old('batch_id') }}">
                                        <option>Select Batch</option>
                                        @foreach ($batches as $batch)
                                            <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                        @endforeach
                                        @error('batch_id')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </select>


                                </div>

                                <div class="form-group">
                                    <label>Select Student</label>
                                    <select class="form-control" name="student_id" value="{{ old('student_id') }}">
                                        <option>Select Student</option>
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                        @error('student_id')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </select>


                                </div>

                                <div class="form-group">
                                    <label for="join_date">Join Date</label>
                                    <input type="date" name="join_date" id="join_date"
                                        class="form-control @error('join_date') is-invalid @enderror"
                                        placeholder="Enter join date" value="{{ old('join_date') }}">
                                    @error('join_date')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="fee">Fees</label>
                                    <input type="number" name="fee" id="fee"
                                        class="form-control @error('fee') is-invalid @enderror"
                                        placeholder="Enter Fee Amount" value="{{ old('fee') }}">
                                    @error('fee')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">

                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> --}}
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
