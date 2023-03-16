<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    
    // Menampilkan dashboard
    public function index()
    {
        return view('admin.index');
    }
    // Menampilkan data User yang sudah login
    public function showUser()
    {
        $user = User::all();
        // return $user;
        return view('admin.home', compact('user'));
    }

    // Menampilkan data Klivik Hewan
    public function showVet()
    {
        $vets = DB::table('vets')->get();

        return view('admin/DataVet', compact('vets'));
    }
    
    // Menambahkan data Klivik Hewan
    public function add()
    {
        return view('admin.addVet');
    }
    
    // Menambahkan data Klivik Hewan ke database
    public function addVet(Request $request)
    {
        DB::table('vets')->insert([
            'name' =>$request->name,
            'alamat' =>$request->alamat,
            'kota' =>$request->kota,
            'telephone' =>$request->telephone,
            'email' =>$request->email,
        ]);
        return redirect('adminVet')->with('status', 'Data berhasil ditambahkan!');
    }
}
