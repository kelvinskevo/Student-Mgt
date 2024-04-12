@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Enrollments
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="/students">Enrollements</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <a href="{{ url('/enrollments/create') }}" class="btn btn-primary btn-sm" title="Add New Enrollment">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Add New Enrollment
                    </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Enroll No</th>
                                <th>Batch</th>
                                <th>Student</th>
                                <th>Join Date</th>
                                <th>Fee</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($enrollments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->enrollment_no }}</td>
                                    <td>{{ $item->batch->name }}</td>
                                    <td>{{ $item->student->name }}</td>
                                    <td>{{ $item->join_date }}</td>
                                    <td> Ksh.{{ $item->fee }}</td>

                                    <td>
                                        <form method="POST" action="/enrollments/{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/enrollments/{{ $item->id }}" class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i> view
                                            </a>
                                            <a href="/enrollments/{{ $item->id }}/edit"
                                                class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i>
                                                Edit
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i>
                                                Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection
