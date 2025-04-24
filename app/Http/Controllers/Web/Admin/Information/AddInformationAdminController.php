<?php

namespace App\Http\Controllers\Web\Admin\Information;

use App\Http\Requests\Web\Admin\Information\AddReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Information;

class AddInformationAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.information.add');
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Information\AddReq $request
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
                $image = $request->file('image')->storePublicly(Information::IMAGE_DIR);
            }

            Information::create([
                'description' => $descriptionReq,
                'date' => $dateReq,
                'name' => $nameReq,
                'image' => $image,
            ]);

            DB::commit();

            return redirect()
                ->route(config('route.admin.information.home'))
                ->with('success', 'Berhasil menambahkan informasi');
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
