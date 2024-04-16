<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user()->role !== $role) {
            switch ($role) {
                case 'admin':
                    return redirect('admin/dashboard');
                case 'teacher':
                    return redirect('teacher/dashboard');
                case 'student':
                    return redirect('student/dashboard');
                default:
                    return redirect('login');
            }
        }

        return $next($request);
    }
}
