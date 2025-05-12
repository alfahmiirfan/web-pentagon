<?php

namespace App\Http\Controllers\Web\Admin\StudentActivity;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\StudentActivity;

class DeleteStudentActivityAdminController extends Controller
{
    /**
     * @param \App\Models\StudentActivity $studentActivity
     * 
     * @return RedirectResponse
     */
    public function action(StudentActivity $studentActivity): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $studentActivity->image;

            $studentActivity->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.student-activity.home'))
                ->with('success', 'Berhasil menghapus kesiswaan');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
