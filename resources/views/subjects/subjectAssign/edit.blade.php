@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Subjects

            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/students">Subjects</a></li>
                <li class="active">Edit Subject</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Subject</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('messages')
                        <form action="{{ route('class_subject_assignments.update', $assignment->id) }}" method="POST"
                            role="form">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <select name="class_id"
                                        class="form-control js-example-basic-single @error('class_id') is-invalid @enderror"
                                        id="class_id">
                                        <option>Select Class</option>
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}"
                                                {{ $class->id == $currentClassId ? 'selected' : '' }}>
                                                {{ $class->name }}
                                        @endforeach
                                    </select>
                                    @error('name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <select name="subject_id" class="form-control js-example-basic-single">
                                        <option></option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}"
                                                {{ $subject->id == $currentSubjectId ? 'selected' : '' }}>
                                                {{ $subject->name }}
                                        @endforeach
                                    </select>
                                    @error('subject_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="active" {{ $currentStatus == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $currentStatus == 'inactive' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                                </select>
                                @error('status')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
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
