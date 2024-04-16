@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                payments
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="/teachers">Payments</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <a href="{{ url('/payments/create') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        New Payment</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Enrollment</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->enrollment->enrollment_no }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->paid_date }}</td>

                                    <td>
                                        <form method="POST" action="/payments/{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/payments/{{ $item->id }}" class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i> view
                                            </a>
                                            <a href="/payments/{{ $item->id }}/edit" class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o"></i>
                                                Edit
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i>
                                                Delete</button>
                                            <a href="{{ url('/report/report1/' . $item->id) }}"><button
                                                    class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>
                                                    Print</button></a>
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
