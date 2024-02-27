<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $studentCount = (new StudentController)->studentCounter();
        $courseCount = (new CourseController)->courseCounter();
        $teacherCount = (new TeacherController)->teacherCounter();
        return view('dashboard', compact('studentCount', 'courseCount', 'teacherCount'));
    }
}
