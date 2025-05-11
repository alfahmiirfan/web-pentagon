<?php

namespace App\Http\Controllers\Web\Admin\Student;

use App\Http\Requests\Web\Admin\Student\AddReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class AddStudentAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.student.add');
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Student\AddReq $request
     * 
     * @return RedirectResponse
     */
    public function action(AddReq $request): RedirectResponse
    {
        [
            'birth_place' => $brithPlaceReq,
            'birth_date' => $brithDateReq,
            'address' => $addressReq,
            'gender' => $genderReq,
            'dream' => $dreamReq,
            'email' => $emailReq,
            'motto' => $mottoReq,
            'phone' => $phoneReq,
            'name' => $nameReq,
            'nisn' => $nisnReq,
        ] = $request;

        $image = null;

        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Student::IMAGE_DIR);
            }

            Student::create([
                'birth_place' => $brithPlaceReq,
                'birth_date' => $brithDateReq,
                'address' => $addressReq,
                'gender' => $genderReq,
                'dream' => $dreamReq,
                'email' => $emailReq,
                'motto' => $mottoReq,
                'phone' => $phoneReq,
                'name' => $nameReq,
                'nisn' => $nisnReq,
                'image' => $image,
            ]);

            DB::commit();

            return redirect()
                ->route(config('route.admin.student.home'))
                ->with('success', 'Berhasil menambahkan siswa');
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
