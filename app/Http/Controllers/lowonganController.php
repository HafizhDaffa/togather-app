<?php

namespace App\Http\Controllers;

use App\Models\formLowongan;
use Illuminate\Http\Request;

class lowonganController extends Controller
{

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
        // function create(Request $request){
        //     $form_lowongan = new formLowongan;

        //     $form_lowongan->judul = $request->input('judul');
        //     $form_lowongan->jenis = $request->input('jenis');
        //     $form_lowongan->persyaratan = $request-input('persyaratan');
        //     $form_lowongan->kategori = $request->input('kategori');
        //     $form_lowongan->jumlahKelompok = $request->input('jumlahKelompok');
        //     $form_lowongan->linkKelompok = $request->input('linkKelompok');

        //     $form_lowongan->save();

        return redirect('/lowongan2');
    }
}
