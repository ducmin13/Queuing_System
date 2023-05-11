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

class HomeController extends Controller
{

    public function CheckAuth(){
        $id = Session::get('id');
        if($id != NULL){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/flogin');
        }
    }

    public function dashboard()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.dashboard',compact('info_user'));
    }

    public function device()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.device',compact('info_user'));
    }

    public function fnumber()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.number',compact('info_user'));
    }

    public function fnew_number()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.add_new_number',compact('info_user'));
    }

    public function finsert_device()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.insert_device',compact('info_user'));
    }

    public function finsert_service()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.insert_service',compact('info_user'));
    }

    public function finfo_device()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.info_device',compact('info_user'));
    }

    public function fupdate_device()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.update_device',compact('info_user'));
    }

    public function service()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.service',compact('info_user'));
    }

    public function user()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.user',compact('info_user'));
    }

    public function update_user(Request $request, $id)
    {
        $user = User::find($id);
        $user->fullname = $request->input('fullname');
        $user->phone = $request->input('phone');
        $user->role = $request->input('role');
        $user->save();
        
        return redirect()->back();
    }

    public function logout() {
        session()->put('id', NULL);
        return view('pages.flogin');
    }

}
