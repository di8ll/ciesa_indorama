<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Menampilkan form login
    }

    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect('/login'); // Redirect ke halaman login
    }

    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba login melalui API eksternal
        $response = Http::post('https://apis-gw.beacukai.go.id/nle-oauth/v1/user/login', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();

        // Periksa apakah status respons adalah 'success'
        if (isset($data['status']) && $data['status'] === 'success') {
            if (isset($data['item']['access_token'])) {
                // Tambah data pengguna baru dengan access token yang baru
                $user = User::create([
                    'username' => $request->username,
                    'password' => bcrypt($request->password), // Simpan password yang di-hash
                    'access_token' => $data['item']['access_token'], // Simpan access_token
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Pengguna baru berhasil ditambahkan',
                    'data' => $user,
                ]);



                    // Login pengguna
                    Auth::login($user);

                    // Simpan status login ke session
                    $request->session()->put('user_logged_in', true);

                    // Redirect atau lakukan tindakan setelah login berhasil
                    return redirect()->route('home');
                }
            }
        }

        // Jika login gagal
        return redirect()->back()->withErrors(['username' => 'Invalid credentials']);
    }



}
