@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Details

            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/students">Enrollments</a></li>
                <li class="active">Show Enrollment</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">

                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('messages')
                        <div class="col-md-8">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    {{-- <h3 class="box-title">Student Details bars</h3> --}}
                                </div>

                                <div class=" box-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Enrollment:</label>
                                        <p>{{ $payment->enrollment->enrollment_no }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Paid Date:</label>
                                        <p>{{ $payment->paid_date }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Amont:</label>
                                        <p>{{ $payment->amount }}</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </section>
    </div>
@endsection
