<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Batch;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::with('student', 'batch')->get();
        return view('enrollments.index')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $batches = Batch::all();
        return view('enrollments.create')->with('students', $students)->with('batches', $batches);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnrollmentRequest $request)
    {
        Enrollment::create($request->validated());
        return back()->with('success', 'Enrollment Added isa Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        return view('enrollments.show')->with('enrollment', $enrollment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        $students = Student::all();
        $batches = Batch::all();
        return view('enrollments.edit')->with('enrollment', $enrollment)->with('students', $students)->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        $data = $request->validated();
        $enrollment->update($data);
        return back()->with('success', 'Enrollment update isa success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return back()->with('success', 'Enrollment Delete isa success');
    }
    public function enrollmentCounter()
    {
        $enrollmentCount = Enrollment::count();
        return $enrollmentCount;
    }
}
