<?php

namespace App\Http\Controllers\Web\Admin\Facility;

use App\Http\Requests\Web\Admin\Facility\AddReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Facility;

class AddFacilityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.facility.add');
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Facility\AddReq $request
     * 
     * @return RedirectResponse
     */
    public function action(AddReq $request): RedirectResponse
    {
        [
            'name' => $nameReq,
        ] = $request;

        $image = null;

        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Facility::IMAGE_DIR);
            }

            Facility::create([
                'name' => $nameReq,
                'image' => $image,
            ]);

            DB::commit();

            return redirect()
                ->route(config('route.admin.facility.home'))
                ->with('success', 'Berhasil menambahkan fasilitas');
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
