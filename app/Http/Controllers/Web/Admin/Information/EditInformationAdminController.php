<?php

namespace App\Http\Controllers\Web\Admin\Information;

use App\Http\Requests\Web\Admin\Information\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Information;

class EditInformationAdminController extends Controller
{
    /**
     * @param \App\Models\Information $information
     * 
     * @return View
     */
    public function view(Information $information): View
    {
        return view('pages.admin.information.edit', compact([
            'information'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Information\EditReq $request
     * @param \App\Models\Information $information
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, Information $information): RedirectResponse
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
                $image = $request->file('image')->storePublicly(Information::IMAGE_DIR);

                $oldImage = $information->image;
                $data['image'] = $image;
            }

            $information->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.information.home'))
                ->with('success', 'Berhasil mengubah informasi');
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
