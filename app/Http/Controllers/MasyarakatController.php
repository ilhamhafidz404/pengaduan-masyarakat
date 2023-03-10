<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('masyarakat.index', [
            'pengaduan' => Pengaduan::whereNik('20220810052')->get()
        ]);
    }

    public function create()
    {
        return view('masyarakat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'foto' => 'required',
        ]);


        Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' =>  $request->nik,
            'isi_laporan' => $request->isi,
            'foto' => $request->file('foto')->store('foto'),
            'status' => '0'
        ]);

        return redirect()->back()->with([
            'status' => "Berhasil Dikirim",
            'message' => "Laporan sudah terkirim untuk menunggu ditanggapi",
        ]);
    }
}
