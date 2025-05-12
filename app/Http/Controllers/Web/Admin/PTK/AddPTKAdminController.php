<?php

namespace App\Http\Controllers\Web\Admin\PTK;

use App\Http\Requests\Web\Admin\PTK\AddReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\PTK;

class AddPTKAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.ptk.add');
    }

    /**
     * @param \App\Http\Requests\Web\Admin\PTK\AddReq $request
     * 
     * @return RedirectResponse
     */
    public function action(AddReq $request): RedirectResponse
    {
        [
            'description' => $descriptionReq,
            'position' => $positionReq,
            'name' => $nameReq,
            'job' => $jobReq,
            'nip' => $nipReq,
        ] = $request;

        $image = null;

        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(PTK::IMAGE_DIR);
            }

            PTK::create([
                'description' => $descriptionReq,
                'position' => $positionReq,
                'name' => $nameReq,
                'image' => $image,
                'job' => $jobReq,
                'nip' => $nipReq,
            ]);

            DB::commit();

            return redirect()
                ->route(config('route.admin.ptk.home'))
                ->with('success', 'Berhasil menambahkan ptk');
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
