@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Students
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="/students">Students</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <a href="{{ url('/students/create') }}" class="btn btn-primary btn-sm" title="Add New Batch">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Add New Student
                    </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->mobile }}</td>

                                    <td>
                                        <form method="POST" action="/students/{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/students/{{ $item->id }}" class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i> view
                                            </a>
                                            <a href="/students/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i
                                                    class="fa fa-pencil-square-o"></i>
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
                        <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection
