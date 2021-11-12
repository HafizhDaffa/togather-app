<?php

namespace App\Http\Controllers;

use App\Models\formLowongan;
use Illuminate\Http\Request;

class lowonganController extends Controller
{
    public function index(){
        $lowongan = formLowongan::all();

        return view('Lowongan.lowongan2', ['lowongan' => $lowongan]);
    }
    public function index2($id){
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

        $form_lowongan->save();

        return redirect('/lowongan2');
    }
    
}
