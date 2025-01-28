<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SessionTimeout
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
    //     if ($request->session()->has('user_logged_in') && $request->session()->get('user_logged_in') === true) {
    //         // Ambil waktu terakhir aktivitas atau set nilai default jika belum ada
    //         $lastActivity = $request->session()->get('last_activity', Carbon::now()->timestamp);
    //         $currentTime = Carbon::now()->timestamp;

    //         // Periksa apakah sesi telah lebih dari 5 menit (300 detik)
    //         if (($currentTime - $lastActivity) >= 1) {
    //             $request->session()->forget('access_token');
    //             $request->session()->flush();

    //             return redirect()->route('login')->with('error', 'Sesi Anda telah berakhir. Silakan login kembali.');
    //         }

    //         // Perbarui waktu aktivitas terakhir di sesi dengan timestamp
    //         $request->session()->put('last_activity', $currentTime);
    //     } else {
    //         return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    //     }

    //     return $next($request);
    // }
    }
}
