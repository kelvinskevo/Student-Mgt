@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Batches</h2>
                    </div>
                    @include('messages')
                    <div class="card-body">
                        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Batch">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">

                            <table class="table">
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
                                                <a href="/enrollments/{{ $item->id }}" title="View Enrollment"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> View</button></a>
                                                <a href="/enrollments/{{ $item->id }}/edit"
                                                    title="Edit Enrollment"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="POST" action="/enrollments/{{ $item->id }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete enrollment"
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
@endsection
