<?php

namespace App\Http\Controllers\Web\Admin\Activity;

use App\Http\Requests\Web\Admin\Activity\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;

class EditActivityAdminController extends Controller
{
    /**
     * @param \App\Models\Activity $activity
     * 
     * @return View
     */
    public function view(Activity $activity): View
    {
        return view('pages.admin.activity.edit', compact([
            'activity'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Activity\EditReq $request
     * @param \App\Models\Activity $activity
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, Activity $activity): RedirectResponse
    {
        $data = [
            'name' => $request->input('name'),
        ];

        $image = null;

        DB::beginTransaction();

        try {
            $oldImage = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Activity::IMAGE_DIR);

                $oldImage = $activity->image;
                $data['image'] = $image;
            }

            $activity->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.activity.home'))
                ->with('success', 'Berhasil mengubah kegiatan');
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
