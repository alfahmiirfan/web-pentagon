<?php

namespace App\Http\Controllers\Web\Admin\Achievement;

use App\Http\Requests\Web\Admin\Achievement\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Achievement;

class EditAchievementAdminController extends Controller
{
    /**
     * @param \App\Models\Achievement $achievement
     * 
     * @return View
     */
    public function view(Achievement $achievement): View
    {
        return view('pages.admin.achievement.edit', compact([
            'achievement'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Achievement\EditReq $request
     * @param \App\Models\Achievement $achievement
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, Achievement $achievement): RedirectResponse
    {
        $data = [
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'name' => $request->input('name'),
        ];

        $image = null;

        DB::beginTransaction();

        try {
            $oldImage = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Achievement::IMAGE_DIR);

                $oldImage = $achievement->image;
                $data['image'] = $image;
            }

            $achievement->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.achievement.home'))
                ->with('success', 'Berhasil mengubah prestasi');
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
