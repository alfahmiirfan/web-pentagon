<?php

namespace App\Http\Controllers\Web\Admin\Student;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class DeleteStudentAdminController extends Controller
{
    /**
     * @param \App\Models\Student $student
     * 
     * @return RedirectResponse
     */
    public function action(Student $student): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $student->image;

            $student->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.student.home'))
                ->with('success', 'Berhasil menghapus siswa');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
