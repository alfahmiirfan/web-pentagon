<?php

namespace App\Http\Controllers\Web\Admin\Information;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Information;

class DeleteInformationAdminController extends Controller
{
    /**
     * @param \App\Models\Information $information
     * 
     * @return RedirectResponse
     */
    public function action(Information $information): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $information->image;

            $information->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.information.home'))
                ->with('success', 'Berhasil menghapus informasi');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
