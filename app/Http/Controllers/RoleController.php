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

class RoleController extends Controller
{
    public function role()
    {
        $role = DB::table('roles')->paginate(8);
        return view('pages.role',compact('role'));
    }

    public function frole()
    {
        return view('pages.add_role');
    }

    public function add_role(Request $request)
    {
        DB::table('roles')->insert([
            'name' => $request->name,
            'quantity' => 0,
            'desc' => $request->desc,
            'role' => json_encode($request->input('role'))
        ]);
        return Redirect::to('/role')->with('success', 'Thêm vai trò thành công!');
    }
}
