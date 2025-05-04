<?php

namespace App\Http\Controllers\Web\Admin\Alumni;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;

class DeleteAlumniAdminController extends Controller
{
    /**
     * @param \App\Models\Alumni $alumni
     * 
     * @return RedirectResponse
     */
    public function action(Alumni $alumni): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $alumni->image;

            $alumni->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.alumni.home'))
                ->with('success', 'Berhasil menghapus alumni');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
