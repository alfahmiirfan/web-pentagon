<?php

namespace App\Http\Controllers\Web\Admin\Facility;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Facility;

class DeleteFacilityAdminController extends Controller
{
    /**
     * @param \App\Models\Facility $facility
     * 
     * @return RedirectResponse
     */
    public function action(Facility $facility): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $facility->image;

            $facility->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.facility.home'))
                ->with('success', 'Berhasil menghapus fasilitas');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
