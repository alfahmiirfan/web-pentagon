<?php

namespace App\Http\Controllers\Web\Admin\StudentActivity;

use App\Http\Requests\Web\Admin\StudentActivity\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\StudentActivity;

class EditStudentActivityAdminController extends Controller
{
    /**
     * @param \App\Models\StudentActivity $studentActivity
     * 
     * @return View
     */
    public function view(StudentActivity $studentActivity): View
    {
        return view('pages.admin.student-activity.edit', compact([
            'studentActivity'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\StudentActivity\EditReq $request
     * @param \App\Models\StudentActivity $studentActivity
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, StudentActivity $studentActivity): RedirectResponse
    {
        $data = [
            'name' => $request->input('name'),
        ];

        $image = null;

        DB::beginTransaction();

        try {
            $oldImage = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(StudentActivity::IMAGE_DIR);

                $oldImage = $studentActivity->image;
                $data['image'] = $image;
            }

            $studentActivity->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.student-activity.home'))
                ->with('success', 'Berhasil mengubah kesiswaan');
        } catch (\Throwable $th) {
            DB::rollBack();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
