@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $batch->name }} Details

            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/batchs">batchs</a></li>
                <li class="active">Add New Teacher</li>
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
                                    <h3 class="box-title">Techer's Details</h3>
                                </div>

                                <div class=" box-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name:</label>
                                        <p>{{ $batch->name }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Course::</label>
                                        <p>{{ $batch->course_id }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile:</label>
                                        <p>{{ $batch->mobile }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email:</label>
                                        <p>{{ $batch->email }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Date of Birth:</label>
                                        <p>{{ $batch->dob }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender:</label>
                                        <p>{{ $batch->gender }}</p>
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




    <div class="card">

        <div class="card-header">Details Page</div>

        <div class="card-body">
            <h5 class="card-title">Name : {{ $batch->name }}</h5>
            <p class="card-text">Address : {{ $batch->address }}</p>
            <p class="card-text">Mobile : {{ $batch->mobile }}</p>


        </div>
    </div>
@endsection
