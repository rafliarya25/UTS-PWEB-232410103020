<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        // Login sederhana tanpa autentikasi
        if ($username && $password) {
            return redirect()->route('dashboard', ['username' => $username]);
        }
        return redirect()->back()->with('error', 'Login gagal');
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan() {
        $data = [
            ['id' => 1, 'nama' => 'Kopi Robusta', 'stok' => 20],
            ['id' => 2, 'nama' => 'Kopi Arabika', 'stok' => 15],
            ['id' => 3, 'nama' => 'Kopi Liberika', 'stok' => 10],
        ];
        return view('pengelolaan', compact('data'));
    }
}
