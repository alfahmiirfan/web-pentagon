<?php

namespace App\Http\Controllers\Web\Admin\Activity;

use App\Http\Requests\Web\Admin\Activity\AddReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;

class AddActivityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.activity.add');
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Activity\AddReq $request
     * 
     * @return RedirectResponse
     */
    public function action(AddReq $request): RedirectResponse
    {
        [
            'name' => $nameReq,
        ] = $request;

        $image = null;

        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(Activity::IMAGE_DIR);
            }

            Activity::create([
                'name' => $nameReq,
                'image' => $image,
            ]);

            DB::commit();

            return redirect()
                ->route(config('route.admin.activity.home'))
                ->with('success', 'berhasil menambahkan kegiatan');
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
