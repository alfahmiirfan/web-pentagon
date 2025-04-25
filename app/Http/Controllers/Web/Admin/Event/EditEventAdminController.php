<?php

namespace App\Http\Controllers\Web\Admin\Event;

use App\Http\Requests\Web\Admin\Event\EditReq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class EditEventAdminController extends Controller
{
    /**
     * @param \App\Models\Event $event
     * 
     * @return View
     */
    public function view(Event $event): View
    {
        return view('pages.admin.event.edit', compact([
            'event'
        ]));
    }

    /**
     * @param \App\Http\Requests\Web\Admin\Event\EditReq $request
     * @param \App\Models\Event $event
     * 
     * @return RedirectResponse
     */
    public function action(EditReq $request, Event $event): RedirectResponse
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
                $image = $request->file('image')->storePublicly(Event::IMAGE_DIR);

                $oldImage = $event->image;
                $data['image'] = $image;
            }

            $event->update($data);

            if ($oldImage) {
                if (Storage::exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.event.home'))
                ->with('success', 'Berhasil mengubah agenda');
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
