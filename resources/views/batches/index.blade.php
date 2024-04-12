@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Batches
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="/teachers">Batches</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('messages')
            <div class="box">
                <div class="box-header">
                    <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New Batch">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Batch
                    </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Course Name</th>
                                <th>Start Date</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($batches as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->course->name ?? 'N/A' }}</td>
                                    <td>{{ $item->start_date }}</td>

                                    <td>
                                        <a href="/batches/{{ $item->id }}" title="View Batch"><button
                                                class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                View</button></a>
                                        <a href="/batches/{{ $item->id }}/edit" title="Edit Batch"><button
                                                class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i>
                                                Edit</button></a>

                                        <form method="POST" action="/batches/{{ $item->id }}" accept-charset="UTF-8"
                                            style="display:inline">
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
                                <th>Name</th>
                                <th>Course Name</th>
                                <th>Start Date</th>
                                <th>Actions</th>
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












{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Batches</h2>
                </div>
                @include('messages')
                <div class="card-body">
                    <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New Batch">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Course Name</th>
                                    <th>Start Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($batches as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->course->name ?? 'N/A' }}</td>
                                        <td>{{ $item->start_date }}</td>

                                        <td>
                                            <a href="/batches/{{ $item->id }}" title="View Batch"><button
                                                    class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                        aria-hidden="true"></i> View</button></a>
                                            <a href="/batches/{{ $item->id }}/edit" title="Edit Batch"><button
                                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i>
                                                    Edit</button></a>

                                            <form method="POST" action="/batches/{{ $item->id }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Delete batch"
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
