<?php

namespace App\Http\Controllers\Web\Admin\PTK;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\PTK;

class DeletePTKAdminController extends Controller
{
    /**
     * @param \App\Models\PTK $ptk
     * 
     * @return RedirectResponse
     */
    public function action(PTK $ptk): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $ptk->image;

            $ptk->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.ptk.home'))
                ->with('success', 'Berhasil menghapus ptk');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
