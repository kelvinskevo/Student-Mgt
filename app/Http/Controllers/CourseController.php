<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {

        // Validate the request data
        $data = $request->validated();

        // Generate a unique course code with only three numbers
        do {
            $courseCode = rand(100, 999);
        } while (Course::where('code', $courseCode)->exists());

        // Set the course code and the created_by field
        $data['code'] = $courseCode;
        $data['created_by'] = Auth::id();

        // Create the course
        Course::create($data);

        // Redirect or return response
        return back()->with('success', 'Class added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $data = $request->validated();
        $course->update($data);
        return back()->with('success', 'course updated Succcessfuly');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('success', 'course Deleted Succcessfuly');
    }

    public function courseCounter()
    {
        $courseCount = Course::count();
        return $courseCount;
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
