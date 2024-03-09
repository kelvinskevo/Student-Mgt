<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\Enrollment;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $studentCount = (new StudentController)->studentCounter();
        $courseCount = (new CourseController)->courseCounter();
        $teacherCount = (new TeacherController)->teacherCounter();
        $enrollmentCount = (new EnrollmentController)->enrollmentCounter();
        return view('dashboard', compact('studentCount', 'courseCount', 'teacherCount', 'enrollmentCount'));
    }
}
