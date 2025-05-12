<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Student;

class StudentLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $students = Student::latest()->get();

        return view('pages.landing.student.home', compact([
            'students'
        ]));
    }

    /**
     * @param \App\Models\Student $student
     * 
     * @return View
     */
    public function detail(Student $student): View
    {
        return view('pages.landing.student.detail', compact([
            'student'
        ]));
    }
}
