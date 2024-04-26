<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassSubjectAssignmentRequest;
use App\Http\Requests\UpdateClassSubjectAssignmentRequest;
use App\Models\ClassSubjectAssignment;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class ClassSubjectAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = ClassSubjectAssignment::all();
        $classes = Course::all();
        $subjects = Subject::all();

        return view('subjects.subjectAssign.create', [
            'assignments' => $assignments,
            'classes' => $classes,
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('subjects.subjectAssign.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassSubjectAssignmentRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id(); // Set the created_by field to the current user's ID

        ClassSubjectAssignment::create($data);
        return back()->with('success', 'Class added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassSubjectAssignment $classSubjectAssignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassSubjectAssignment $classSubjectAssignment)
    {
        $classes = Course::all();
        $subjects = Subject::all();

        return view('subjects.subjectAssign.edit', [
            'assignment' => $classSubjectAssignment,
            'classes' => $classes,
            'subjects' => $subjects,
            'currentClassId' => $classSubjectAssignment->class_id,
            'currentSubjectId' => $classSubjectAssignment->subject_id,
            'currentStatus' => $classSubjectAssignment->status,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassSubjectAssignmentRequest $request, ClassSubjectAssignment $classSubjectAssignment)
    {
        $data = $request->validated();
        $classSubjectAssignment->update($data);
        return back()->with('success', 'Assignment updated Succcessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassSubjectAssignment $classSubjectAssignment)
    {
        $classSubjectAssignment->delete();
        return back()->with('success', 'Assignment deleted successfully');
    }
}
