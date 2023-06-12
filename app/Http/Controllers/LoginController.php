<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
    public function flogin(){

        return view('pages.flogin');
    }
     public function fregister(){

        return view('pages.fregister');
    }

    public function fforgot(){

        return view('pages.fforgot');
    }

    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');

        $credentials = [
            'name' => $name,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            auth()->login($user);
            $request->session()->put('id', $user->id);
            $request->session()->put('name', $user->fullname);
            return redirect('/dashboard');
        } else {
            Session::put('message', 'Sai mật khẩu hoặc tên đăng nhập');
            return redirect('flogin');
        }
    }

}
