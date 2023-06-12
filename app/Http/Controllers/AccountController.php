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

class AccountController extends Controller
{
     public function account()
    {
        $accounts = DB::table('users')->paginate(8);
        return view('pages.account',compact('accounts'));
    }

    public function fnew_account()
    {
        $role = DB::table('roles')->get();
        return view('pages.add_new_account',compact('role'));
    }

    public function new_account(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->role = $request->input('role');
        $user->status = $request->input('status');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $role = DB::table('roles')->where('name', $request->input('role'))->first();
        $roleQuantity = $role->quantity + 1;

        DB::table('roles')->where('name', $request->input('role'))->update(['quantity' => $roleQuantity]);
        $accounts = DB::table('users')->paginate(8);
        return view('pages.account',compact('accounts'));
    }
}
