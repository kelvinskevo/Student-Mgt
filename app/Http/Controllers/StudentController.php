<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $students = Student::all();
        return view('students.create')->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $validatedData = $request->validated();

        // Handle file upload for profile picture
        if ($request->hasFile('profile_pic')) {
            $validatedData['profile_pic'] = $request->file('profile_pic')->store('profile_pictures', 'public');
        }

        // Get the selected course ID
        $courseId = $validatedData['class'];

        // Fetch the course from the database
        $course = Course::findOrFail($courseId);

        // Get the course code and the current year
        $courseCode = $course->code;
        $currentYear = date('Y');

        // Find the last admission number for the current course and year
        $lastStudent = Student::where('class', $courseId)
            ->where('admission_number', 'like', $courseCode . '-' . $currentYear . '-%')
            ->orderBy('admission_number', 'desc')
            ->first();

        // Extract and increment the numeric part of the admission number
        if ($lastStudent) {
            $lastNumber = (int)substr($lastStudent->admission_number, -3);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        // Format the new admission number
        $newAdmissionNumber = $courseCode . '-' . $currentYear . '-' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

        // Set the class (course ID), admission number, and the created_by field
        $validatedData['class'] = $courseId;
        $validatedData['admission_number'] = $newAdmissionNumber;
        $validatedData['created_by'] = Auth::id();

        // Set the status field if not present
        if (!isset($validatedData['status'])) {
            $validatedData['status'] = 'active'; // Default status
        }

        // Create the student
        Student::create($validatedData);

        return Redirect::route('students.index')->with('success', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $data = $request->validated();
        $student->update($data);
        return back()->with('success', 'Student Updated Succcessfuly');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back()->with('success', 'Student Deleted Succcessfuly');
    }

    public function studentCounter()
    {
        $studentCount = Student::count();
        return $studentCount;
    }

    public function StudentDashboard()
    {
        return view('teachers.dashboard');
    }
}
