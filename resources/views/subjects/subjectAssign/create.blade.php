@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Assign Subject

            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/subjects">Subjects</a></li>
                <li class="active">Assign Subject</li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Assign New Subject</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('messages')
                        <form action="{{ route('class_subject_assignments.store') }}" method="POST" role="form">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <select name="class_id"
                                        class="form-control js-example-basic-single @error('class_id') is-invalid @enderror"
                                        id="class_id">
                                        <option>Select Class</option>
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('class_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <select name="subject_id" class="form-control js-example-basic-single">
                                        <option>Select Subject</option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subject_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $('.js-example-basic-single').select2();
                                    });
                                </script>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror"
                                        value="{{ old('status') }}">
                                        <option>Select Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Assign</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

        <section class="content">
            @include('messages')
            <div class="box">
                <div class="box-header">
                    <h3> Assigned Subjects</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class Name</th>
                                <th>Subject Name</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($item->class)
                                            {{ $item->class->name }}
                                        @else
                                            Class Not Found
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->subject)
                                            {{ $item->subject->name }}
                                        @else
                                            Subject Not Found
                                        @endif
                                    </td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->createdBy->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>

                                        <a href="{{ route('class_subject_assignments.edit', $item->id) }}"
                                            title="Edit Batch"><button class="btn btn-warning btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</button></a>

                                        <form method="POST"
                                            action="{{ route('class_subject_assignments.destroy', $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            @csrf
                                            @method('DELETE')


                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete batch"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i>
                                                Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Class Name</th>
                                <th>Subject Name</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.row -->

        </section>
    </div>
@endsection
