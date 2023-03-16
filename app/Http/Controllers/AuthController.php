<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // menampilkan form daftar
    public function getsignup()
    {
        return view('signup');
    }

    //menambahkan data user ke database 
    public function postsignup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'age' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'age' => $request->age,
            'level' => $request->level,
            'password' => bcrypt($request->password)
        ]);
        
        auth()->loginUsingId($user->id);
        
        return redirect()->route('explore');
        // return $request;
        
    }

    // menampilkan form login
    public function getlogin()
    {
        return view('login');
    }

    // mengecek user terdaftar
    public function postlogin(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]);
        $kredensil = $request->only('email','password');
            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->route('indexAdmin');
                }elseif ($user->level == 'user') {
                    return redirect()->route('explore');
                }
                return redirect()->back();
            }
            return redirect()->back();

        // if(!auth()->attempt(['email' => $request->email,'password' => $request->password])){
        //     return redirect()->back();            
        // }
        // return redirect()->route('explore');
    }

    // keluar user
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
