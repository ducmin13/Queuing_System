<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role()
    {
        return view('pages.role');
    }

    public function frole()
    {
        return view('pages.add_role');
    }
}
