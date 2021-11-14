<?php

namespace App\Http\Controllers;

use App\Models\formLowongan;
use Illuminate\Http\Request;

class lowonganController extends Controller
{
    public function index()
    {
        $lowongan = formLowongan::all();

        return view('Lowongan.lowongan', ['lowongan' => $lowongan]);
    }
    public function index2($id)
    {
        $form_lowongan = formLowongan::find($id);

        return view('Lowongan.edit', ['form_lowongan' => $form_lowongan]);
    }



    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        $form_lowongan = formLowongan::find($id)->delete();

        return redirect('/lowongan2');
    }

    function edit(Request $request, $id)
    {
        // dd ($request->all());
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'jenis' => ['required', 'string', 'max:255'],
            'persyaratan' => ['required', 'string', 'max:1000'],
            'kategori' => ['required', 'string', 'max:255'],
            'jumlahAnggota' => ['required', 'integer'],
            'linkKelompok' => ['required', 'string', 'max:255'],
        ]);

        $form_lowongan = formLowongan::find($id);

        $form_lowongan->judul = $request->judul;
        $form_lowongan->jenis = $request->jenis;
        $form_lowongan->persyaratan = $request->persyaratan;
        $form_lowongan->kategori = $request->kategori;
        $form_lowongan->jumlahAnggota = $request->jumlahAnggota;
        $form_lowongan->linkKelompok = $request->linkKelompok;

        $form_lowongan->save();

        return redirect('/lowongan2');
    }

    function create(Request $request)
    {
        // dd ($request->all());
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'jenis' => ['required', 'string', 'max:255'],
            'persyaratan' => ['required', 'string', 'max:1000'],
            'kategori' => ['required', 'string', 'max:255'],
            'jumlahAnggota' => ['required', 'integer'],
            'linkKelompok' => ['required', 'string', 'max:255'],
        ]);

        $form_lowongan = new formLowongan();
        $form_lowongan->judul = $request->judul;
        $form_lowongan->jenis = $request->jenis;
        $form_lowongan->persyaratan = $request->persyaratan;
        $form_lowongan->kategori = $request->kategori;
        $form_lowongan->jumlahAnggota = $request->jumlahAnggota;
        $form_lowongan->linkKelompok = $request->linkKelompok;
        $form_lowongan->user_id = auth()->user()->id;

        $form_lowongan->save();

        return redirect('/lowongan2');
    }

    public function test()
    {
        $lowongan = formLowongan::all()->where('user_id', auth()->user()->id);
        if ($lowongan->isEmpty()) {
            return view('Lowongan.lowongan');
        } else {
            return view('Lowongan.lowongan2', ['lowongan' => $lowongan]);
        }
    }

    public function kategori()
    {
        $total_kategori = formLowongan::groupBy('kategori')->selectRaw('count(*) as total, kategori')->get()->toArray();
        $arr = [
            "Software Development" => 0,
            "Web Development" => 0,
            "UI/UX Design" => 0,
            "Karya Tulis" => 0,
            "Game Development" => 0,
            "Data Mining" => 0,
            "Keamanan Jaringan" => 0,
            "Lainnya" => 0,
        ];

        foreach ($total_kategori as $total) {
            $arr[$total['kategori']] = $total['total'];
        }

        return view('Kategori.kategori', ['total_kategori' => $arr]);
    }
    public function tampilkan_kategori($kategori)
    {
        $daftar_kelompok = formLowongan::where('kategori', $kategori)->get();
        return view('Lis.lis', ['daftar_kelompok' => $daftar_kelompok, 'kategori' => $kategori]);
    }

    public function tampilkan_kelompok($id)
    {
        $kelompok = formLowongan::find($id);
        return view('Kelompok.kelompok', ["kelompok" => $kelompok]);
    }
}
