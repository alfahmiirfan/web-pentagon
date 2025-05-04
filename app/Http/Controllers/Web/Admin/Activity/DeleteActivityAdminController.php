<?php

namespace App\Http\Controllers\Web\Admin\Activity;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;

class DeleteActivityAdminController extends Controller
{
    /**
     * @param \App\Models\Activity $activity
     * 
     * @return RedirectResponse
     */
    public function action(Activity $activity): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $activity->image;

            $activity->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.activity.home'))
                ->with('success', 'Berhasil menghapus kegiatan');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
