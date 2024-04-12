@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Payments
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/payments">Payments</a></li>
                <li class="active">New Payment</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Payment</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('messages')
                        <form action="/payments" method="POST" role="form">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Enrollment</label>
                                    <select class="form-control @error('enrollment_id') is-invalid @enderror"
                                        name="enrollment_id">
                                        <option>Select Enrollment</option>
                                        @foreach ($enrollments as $enroll)
                                            <option value="{{ $enroll->id }}">{{ $enroll->enrollment_no }}</option>
                                        @endforeach
                                    </select>
                                    @error('enrollment_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Payment Date</label>
                                    <input type="date" name="paid_date" id="paid_date"
                                        class="form-control @error('paid_date') is-invalid @enderror"
                                        placeholder="Enter Date Payment" value="{{ old('paid_date') }}">
                                    @error('paid_date')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount" id="amount"
                                        class="form-control @error('amount') is-invalid @enderror"
                                        placeholder="Enter Amount" value="{{ old('amount') }}">
                                    @error('amount')
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
