@extends('layout')
@section('content')
    <div class="container">
        <h4>Welcome to <strong>Admin</strong> Dashboard</h4>
    </div>

    <style>
        /* Custom CSS */
        body {
            height: 97vh;
            background-color: #e6df90;
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-center bg-info text-dark rounded p-3">
                    <div class="card-body">
                        <h3 class="card-text counter" data-target="{{ $courseCount }}">
                            0
                        </h3>
                        <p class="card-title fs-5 text-white">
                            No. of Courses we provided
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-info
							text-dark rounded p-3">
                    <div class="card-body">
                        <h3 class="card-text counter" data-target=" {{ $studentCount }}">
                            0
                        </h3>
                        <p class="card-title
								fs-5 text-white">
                            Enrolled Students
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-info
							text-dark rounded p-3">
                    <div class="card-body">
                        <h3 class="card-text counter" data-target="{{ $teacherCount }}">
                            0
                        </h3>
                        <p class="card-title fs-5
								text-white">
                            Registered Students
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
