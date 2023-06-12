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

    public function CheckAuth()
    {
        if (Session::has('id')) {
            return redirect('/dashboard');
        } else {
            return redirect('/flogin');
        }
    }

    public function dashboard()
    {
        $number = DB::table('tbl_number')->count();
        $used = DB::table('tbl_number')->where('status', 'used')->count();
        $pending = DB::table('tbl_number')->where('status', 'pending')->count();
        $skipped = DB::table('tbl_number')->where('status', 'skipped')->count();
        $device = DB::table('tbl_device')->count();
        $device1 = DB::table('tbl_device')->where('device_status', 'active')->count();
        $device2 = $device- $device1;
        $service = DB::table('tbl_service')->count();
        $service1 = DB::table('tbl_service')->where('service_status', 'active')->count();
        $service2 = $service- $service1;
        return view('pages.dashboard',compact('number','used','pending','skipped','device','device1','device2','service','service1','service2'));
    }

    public function user()
    {
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

    public function logout()
    {
        Auth::logout();
        session()->forget('id');
        return view('pages.flogin');
    }


}
