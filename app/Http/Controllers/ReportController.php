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
use Carbon\Carbon;
session_start();

class ReportController extends Controller
{
    public function report()
    {
        $numbers = DB::table('tbl_number')->latest()->paginate(8);
        $services = DB::table('tbl_service')->get();
        return view('pages.report',compact('numbers','services'));
    }

    public function filterbyname(Request $request)
    {
        $services = DB::table('tbl_service')->get();
        $service_name = $request->input('service_name');
        $numbers = DB::table('tbl_number')
        ->when($service_name, function ($query, $service_name) {
            return $query->where('service_name', $service_name);
        })
        ->paginate(9);
        return view('pages.report',compact('numbers','services'));

    }

    public function filterbystatus(Request $request)
    {
        $services = DB::table('tbl_service')->get();
        $status = $request->input('status');
        $numbers = DB::table('tbl_number')
        ->when($status, function ($query, $status) {
            return $query->where('status', $status);
        })
        ->paginate(9);
        return view('pages.report',compact('numbers','services'));

    }

    public function filterbyday(Request $request)
    {
        $services = DB::table('tbl_service')->get();
        $day = $request->input('issued_at');
        $numbers = DB::table('tbl_number')
        ->when($day, function ($query, $day) {
            return $query->where('day', $day);
        })
        ->paginate(9);
        return view('pages.report',compact('numbers','services'));

    }
}
