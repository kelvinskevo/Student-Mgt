<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
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

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
