<?php

namespace App\Http\Controllers;

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
        // Periksa apakah sesi 'user_logged_in' ada dan bernilai true
        if ($request->session()->has('user_logged_in') && $request->session()->get('user_logged_in') === true) {
            // Periksa apakah waktu sesi sudah lebih dari 1 jam
            $lastActivity = $request->session()->get('last_activity', Carbon::now());
            $currentTime = Carbon::now();

            if ($currentTime->diffInMinutes($lastActivity) >= 60) {
                // Jika lebih dari 1 jam, hapus sesi dan redirect ke login
                $request->session()->flush(); // Hapus semua data sesi
                return redirect()->route('login')->with('error', 'Sesi Anda telah berakhir. Silakan login kembali.');
            }

            // Perbarui waktu aktivitas terakhir
            $request->session()->put('last_activity', $currentTime);

            // Jika sudah login dan sesi belum habis, arahkan ke halaman dashboard
            return view('dashboard.home');
        }

        // Jika belum login, arahkan kembali ke halaman login
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }
}
