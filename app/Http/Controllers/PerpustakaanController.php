<?php

namespace App\Http\Controllers;

use App\Models\Perpus;
use Illuminate\Http\Request;
use App\Http\Requests\PinjamRequest;


class PerpustakaanController extends Controller
{
    public function index()
    {
        return view('perpus.home');
    }

    public function pinjam()
    {
        return view('perpus.pinjam');
    }

    public function pinjambuku(PinjamRequest $request)
    {
        if ($request->validated()) {

            Perpus::create([
                'judulbuku' => $request->judulbuku,
                'bataspinjam' => $request->bataspinjam,
                'peminjam' => $request->peminjam,
                'nim' => $request->nim
            ]);

            return redirect('/perpustakaan')->with('pesan', 'peminjaman berhasil');
        }
    }
}
