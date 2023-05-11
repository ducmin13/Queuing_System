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

    

    public function register(Request $request){
        // Validate the user input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create a new user in the database
        $user = new User;
        $user->name = $request->input('name');
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        auth()->login($user);
        // Log the user in and redirect them to the dashboard
        $request->session()->put('id', $user->id);
        return Redirect('flogin');
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
            $request->session()->put('id', $user->id);
            $info_user = DB::table('users')->where('id', Session::get('id'))->get();
            return view('pages.dashboard', compact('info_user'));
        } else {
            Session::put('message', 'Sai mật khẩu hoặc tên đăng nhập');
            return redirect('flogin');
        }
    }

}
