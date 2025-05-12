<?php

namespace App\Http\Controllers\Web\Admin\Student;

use App\Http\Requests\Web\Admin\Student\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class EditStudentAdminController extends Controller
{
    /**
     * @param \App\Models\Student $student
     * 
     * @return View
     */
    public function view(Student $student): View
    {
        return view('pages.admin.student.edit', compact([
            'student'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Student\EditReq $request
     * @param \App\Models\Student $student
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, Student $student): RedirectResponse
    {
        $data = [
            'birth_place' => $request->input('birth_place'),
            'birth_date' => $request->input('birth_date'),
            'generation' => $request->input('generation'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'nisn' => $request->input('nisn'),
        ];

        $image = null;

        DB::beginTransaction();

        try {
            $oldImage = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Student::IMAGE_DIR);

                $oldImage = $student->image;
                $data['image'] = $image;
            }

            $student->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.student.home'))
                ->with('success', 'Berhasil mengubah siswa');
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
