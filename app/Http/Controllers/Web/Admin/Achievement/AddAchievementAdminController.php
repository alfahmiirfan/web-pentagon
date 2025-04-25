<?php

namespace App\Http\Controllers\Web\Admin\Achievement;

use App\Http\Requests\Web\Admin\Achievement\AddReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Achievement;

class AddAchievementAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.achievement.add');
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Achievement\AddReq $request
     * 
     * @return RedirectResponse
     */
    public function action(AddReq $request): RedirectResponse
    {
        [
            'description' => $descriptionReq,
            'date' => $dateReq,
            'name' => $nameReq,
        ] = $request;

        $image = null;

        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Achievement::IMAGE_DIR);
            }

            Achievement::create([
                'description' => $descriptionReq,
                'date' => $dateReq,
                'name' => $nameReq,
                'image' => $image,
            ]);

            DB::commit();

            return redirect()
                ->route(config('route.admin.achievement.home'))
                ->with('success', 'Berhasil menambahkan prestasi');
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
