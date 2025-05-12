<?php

namespace App\Http\Controllers\Web\Admin\Alumni;

use App\Http\Requests\Web\Admin\Alumni\AddReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;

class AddAlumniAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.alumni.add');
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Alumni\AddReq $request
     * 
     * @return RedirectResponse
     */
    public function action(AddReq $request): RedirectResponse
    {
        [
            'description' => $descriptionReq,
            'job_place' => $jobPlaceReq,
            'position' => $positionReq,
            'address' => $addressReq,
            'status' => $statusReq,
            'phone' => $phoneReq,
            'name' => $nameReq,
            'year' => $yearReq,
        ] = $request;

        $image = null;

        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Alumni::IMAGE_DIR);
            }

            Alumni::create([
                'description' => $descriptionReq,
                'job_place' => $jobPlaceReq,
                'position' => $positionReq,
                'address' => $addressReq,
                'status' => $statusReq,
                'phone' => $phoneReq,
                'name' => $nameReq,
                'year' => $yearReq,
                'image' => $image,
            ]);

            DB::commit();

            return redirect()
                ->route(config('route.admin.alumni.home'))
                ->with('success', 'Berhasil menambahkan alumni');
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
