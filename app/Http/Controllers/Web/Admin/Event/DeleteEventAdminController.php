<?php

namespace App\Http\Controllers\Web\Admin\Event;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class DeleteEventAdminController extends Controller
{
    /**
     * @param \App\Models\Event $event
     * 
     * @return RedirectResponse
     */
    public function action(Event $event): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $image = $event->image;

            $event->delete();

            if ($image) {
                if (Storage::exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }

            DB::commit();

            return redirect()
                ->route(config('route.admin.event.home'))
                ->with('success', 'Berhasil menghapus agenda');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
