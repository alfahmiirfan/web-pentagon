<?php

namespace App\Http\Controllers\Web\Admin\PTK;

use App\Http\Requests\Web\Admin\PTK\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\PTK;

class EditPTKAdminController extends Controller
{
    /**
     * @param \App\Models\PTK $ptk
     * 
     * @return View
     */
    public function view(PTK $ptk): View
    {
        return view('pages.admin.ptk.edit', compact([
            'ptk'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\PTK\EditReq $request
     * @param \App\Models\PTK $ptk
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, PTK $ptk): RedirectResponse
    {
        $data = [
            'description' => $request->input('description'),
            'position' => $request->input('position'),
            'name' => $request->input('name'),
        ];

        $image = null;

        DB::beginTransaction();

        try {
            $oldImage = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image')->storePublicly(PTK::IMAGE_DIR);

                $oldImage = $ptk->image;
                $data['image'] = $image;
            }

            $ptk->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.ptk.home'))
                ->with('success', 'Berhasil mengubah ptk');
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
