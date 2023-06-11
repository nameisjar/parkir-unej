<?php

namespace App\Http\Controllers;

use App\Models\Parkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('signin');
    }

    public function index1()
    {
        // Mengambil semua data parkiran dari database
        $parkiran = Parkir::all();

        // Mengirim data parkiran ke view untuk ditampilkan
        return view('dashboard', compact('parkiran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        // Validasi input
        $validatedData = $request->validate([
            'plat_nomor' => 'required',
            'jenis_kendaraan' => 'required',
            'area' => 'required',
            'id_user' => 'required',
        ]);

        $plat_nomor = $validatedData['plat_nomor'];
        $jenis_kendaraan = $validatedData['jenis_kendaraan'];
        $area = $validatedData['area'];
        $id_user = $validatedData['id_user'];

        // Buat entri baru dalam database
        $parkir = new Parkir;
        $parkir->plat_nomor = $plat_nomor;
        $parkir->id_jenis_kendaraan = $jenis_kendaraan;
        $parkir->id_area = $area;
        $parkir->id_user = $id_user;
        $parkir->save();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Data parkiran berhasil ditambahkan');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Melakukan proses otentikasi
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, alihkan pengguna ke rute yang diinginkan
            return redirect()->intended('/');
        } else {
            // Jika otentikasi gagal, kembali ke halaman login dengan pesan error
            return back()->with('error', 'Email atau password salah.');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('signin_index')->with('success', 'Anda telah berhasil keluar.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
