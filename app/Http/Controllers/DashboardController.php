<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Teacher;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $studentCount = (new StudentController)->studentCounter();
        $courseCount = (new CourseController)->courseCounter();
        $teacherCount = (new TeacherController)->teacherCounter();
        $enrollmentCount = (new EnrollmentController)->enrollmentCounter();

        return view('admin.dashboard')
            ->with('studentCount', $studentCount)
            ->with('courseCount', $courseCount)
            ->with('teacherCount', $teacherCount)
            ->with('enrollmentCount', $enrollmentCount);
    }
}
