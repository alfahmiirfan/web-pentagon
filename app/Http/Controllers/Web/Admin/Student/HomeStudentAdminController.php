<?php

namespace App\Http\Controllers\Web\Admin\Student;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Student;

class HomeStudentAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = Student::latest()->get();

        return view('pages.admin.student.home', compact([
            'data'
        ]));
    }
}
