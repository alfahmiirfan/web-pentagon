<?php

namespace App\Http\Controllers\Web\Admin\Alumni;

use App\Http\Requests\Web\Admin\Alumni\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;

class EditAlumniAdminController extends Controller
{
    /**
     * @param \App\Models\Alumni $alumni
     * 
     * @return View
     */
    public function view(Alumni $alumni): View
    {
        return view('pages.admin.alumni.edit', compact([
            'alumni'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Alumni\EditReq $request
     * @param \App\Models\Alumni $alumni
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, Alumni $alumni): RedirectResponse
    {
        $data = [
            'description' => $request->input('description'),
            'job_place' => $request->input('job_place'),
            'position' => $request->input('position'),
            'address' => $request->input('address'),
            'status' => $request->input('status'),
            'class' => $request->input('class'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'year' => $request->input('year'),
        ];

        $image = null;

        DB::beginTransaction();

        try {
            $oldImage = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Alumni::IMAGE_DIR);

                $oldImage = $alumni->image;
                $data['image'] = $image;
            }

            $alumni->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.alumni.home'))
                ->with('success', 'Berhasil mengubah alumni');
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
