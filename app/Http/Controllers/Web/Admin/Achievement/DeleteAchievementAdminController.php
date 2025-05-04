<?php

namespace App\Http\Controllers\Web\Admin\Achievement;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Achievement;

class DeleteAchievementAdminController extends Controller
{
    /**
     * @param \App\Models\Achievement $achievement
     * 
     * @return RedirectResponse
     */
    public function action(Achievement $achievement): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $achievement->image;

            $achievement->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.achievement.home'))
                ->with('success', 'Berhasil menghapus prestasi');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
