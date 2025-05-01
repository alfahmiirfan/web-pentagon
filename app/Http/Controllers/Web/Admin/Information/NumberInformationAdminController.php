<?php

namespace App\Http\Controllers\Web\Admin\Information;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Information;

class NumberInformationAdminController extends Controller
{
    /**
     * @param \App\Models\Information $information
     * 
     * @return RedirectResponse
     */
    public function toggle(Information $information): RedirectResponse
    {
        DB::beginTransaction();

        try {
            if ($information->number !== null) {
                Information::whereNotNull('number')->where('number', '>', $information->number)->decrement('number');
                $information->number = null;
            } else {
                $information->number = Information::whereNotNull('number')->count() + 1;
            }

            $information->save();

            DB::commit();

            return back()->with('success', 'Berhasil mengubah pilihan');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }

    /**
     * @param \App\Models\Information $information
     * @param int $number
     * 
     * @return RedirectResponse
     */
    public function change(Information $information, int $number): RedirectResponse
    {
        if ($number > Information::whereNotNull('number')->count() || $number < 1) {
            return back()
                ->withErrors([
                    'error' => 'Nomor tidak valid',
                ]);
        }

        DB::beginTransaction();

        try {
            if ($information->number > $number) {
                Information::whereNotNull('number')
                    ->where('number', '>=', $number)
                    ->where('number', '<', $information->number)
                    ->increment('number');
            } else if ($information->number < $number) {
                Information::whereNotNull('number')
                    ->where('number', '>', $information->number)
                    ->where('number', '<=', $number)
                    ->decrement('number');
            }

            $information->number = $number;
            $information->save();

            DB::commit();

            return back()->with('success', 'Berhasil mengubah pilihan');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => $th->getMessage(),
                ]);
        }
    }
}
