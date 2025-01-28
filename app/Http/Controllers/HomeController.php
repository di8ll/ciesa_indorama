<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman dashboard hanya jika pengguna sudah login.
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */

    public function index(Request $request)
    {
    //     $user = User::all();
    //     // Periksa apakah sesi 'user_logged_in' ada dan bernilai true
    //     if ($request->session()->has('user_logged_in') && $request->session()->get('user_logged_in') === true) {
    //         // Ambil waktu terakhir aktivitas dari sesi atau default sekarang
    //         $lastActivity = $request->session()->get('last_activity', Carbon::now());
    //         $currentTime = Carbon::now();

    //         // Periksa apakah waktu sesi sudah lebih dari 1 jam (60 menit)
    //         if ($currentTime->diffInMinutes($lastActivity) >= 60) {
    //             // Hapus token akses dan semua sesi
    //             $request->session()->forget('access_token');
    //             $request->session()->flush(); // Hapus semua data sesi

    //             // Redirect ke halaman login dengan pesan error
    //             return redirect()->route('login')->with('error', 'Sesi Anda telah berakhir. Silakan login kembali.');
    //         }

    //         // Perbarui waktu aktivitas terakhir di sesi
    //         $request->session()->put('last_activity', $currentTime);

    //         // Jika sudah login dan sesi belum habis, arahkan ke halaman dashboard
    //         return view('dashboard.home',compact('user'));
    //     }

    //     // Jika belum login, arahkan kembali ke halaman login
    //     return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    // }
    $user = User::all();

    return view('dashboard.home', compact('user'));
    }
}
