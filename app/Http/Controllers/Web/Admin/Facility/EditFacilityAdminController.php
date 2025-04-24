<?php

namespace App\Http\Controllers\Web\Admin\Facility;

use App\Http\Requests\Web\Admin\Facility\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Facility;

class EditFacilityAdminController extends Controller
{
    /**
     * @param \App\Models\Facility $facility
     * 
     * @return View
     */
    public function view(Facility $facility): View
    {
        return view('pages.admin.facility.edit', compact([
            'facility'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Facility\EditReq $request
     * @param \App\Models\Facility $facility
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, Facility $facility): RedirectResponse
    {
        $data = [
            'name' => $request->input('name'),
        ];

        $image = null;

        DB::beginTransaction();

        try {
            $oldImage = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Facility::IMAGE_DIR);

                $oldImage = $facility->image;
                $data['image'] = $image;
            }

            $facility->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.facility.home'))
                ->with('success', 'Berhasil mengubah fasilitas');
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
