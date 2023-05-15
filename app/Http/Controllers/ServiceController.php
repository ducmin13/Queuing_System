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


class ServiceController extends Controller
{
    public function CheckAuth()
    {
        if (Session::has('id')) {
            return redirect('/dashboard');
        } else {
            return redirect('/flogin');
        }
    }

    public function finsert_service()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.insert_service',compact('info_user'));
    }

    public function service()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.service',compact('info_user'));
    }

    public function new_service(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'service_name' => 'required',
            'service_desc' => 'required',
            'auto_increment' => 'required',
            'prefix' => 'required',
            'surfix' => 'required',
            'reset_daily' => 'required'
        ]);

        DB::table('tbl_service')->insert([
            'service_id' => $request->service_id,
            'service_name' => $request->service_name,
            'service_desc' => $request->service_desc,
            'auto_increment' => $request->auto_increment,
            'prefix' => $request->prefix,
            'surfix' => $request->surfix,
            'reset_daily' => $request->reset_daily
        ]);

        return Redirect::to('/service')->with('success', 'Thêm dịch vụ thành công!');
    }



}
