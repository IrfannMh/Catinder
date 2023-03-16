<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Pet;
use App\Models\User;


class HomeController extends Controller
{
    // menampilkan list vet
    public function showdata()
    {
        $vets = DB::table('vets')->get();

        return view('vet', compact('vets'));
    }
    
    // menampilkan form buddy
    public function addbuddy()
    {
        return view('addbuddy');
    }
    
    // add pet ke database
    public function store(Request $request)
    {
        $file = $request->image;
        $namafile = $file->getClientOriginalName();
        $file ->move('pet', $namafile);

        $pet = new Pet();
        $pet->nama = $request->input('nama');
        $pet->user_id = $request->input('user_id');
        $pet->jenis = $request->input('jenis');
        $pet->kelamin = $request->input('kelamin');
        $pet->umur = $request->input('umur');
        $pet->vaksin = $request->input('vaksin');
        $pet->image = $namafile;

        $pet->save();

        return redirect()->route('addbuddy')->with('status', 'Buddy berhasil ditambahkan!');
        // return redirect()->route('explore');
        // dd($request->all());
    }

    //menampilkan profil
    public function profil()
    {
        $user = User::find(Auth::user()->id)->getPet;
        // return $user;
        return view('profil',compact('user'));
    }

    //update profile 
    public function updateprofil(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        // $user->password = Crypt::encryptString( $request->input('password'));
        
        $user->update();
        return redirect()->back();
        // dd($request->all());
        
    }

    public function index()
    {
        // $pets = Pet::all();
        $pets = Pet::with('user')->simplePaginate(1);
        return view('explore', compact('pets'));
    }
    
    // menampilkan fitur chat
    public function chat()
    {
        return view('chat');
    }

    public function recovery()
    {
        return view('recovery');
    }
}
