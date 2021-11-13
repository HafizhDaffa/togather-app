<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class profilController extends Controller
{
    function index(){
        $user = auth()->user();
        return view('Profil.profil', ['user'=> $user]);
    }
    function index2(){
        $user = auth()->user();
        return view('Profil.editProfil', ['user'=> $user]);
    }
    function edit(Request $request){
        // dd ($request->all());
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'NIM' => ['required', 'string', 'max:255'],
            'telepon' => ['required', 'string', 'max:255'],
            'keahlian' => ['required', 'string', 'max:255'],
            'kelamin' => ['required', 'string', 'max:255'],
            'angkatan' => ['required', 'integer'],
            'programstudi' => ['required', 'string', 'max:255']
        ]);

        $user = User::find(auth()->user()->id);
        
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->NIM = $request->NIM;
        $user->telepon = $request->telepon;
        $user->keahlian = $request->keahlian;
        $user->kelamin = $request->kelamin;
        $user->angkatan = $request->angkatan;
        $user->programstudi = $request->programstudi;
        $user->save();

        return redirect('/profil');

    }

    public function tampil(){
        $user = User::all();
        return view('Pengguna.pengguna', ['user'=> $user]);
    }

    public function search(Request $request){
        $search = User::where('nama','like',"%".$request->search."%")
                ->orWhere('keahlian','like',"%".$request->search."%")
                ->orWhere('kelamin','like',"%".$request->search."%")
                ->orWhere('telepon','like',"%".$request->search."%")
                ->paginate(2);
        return view('Pengguna.pengguna', ['user'=>$search]);
    }
}
