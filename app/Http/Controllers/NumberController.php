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

class NumberController extends Controller
{
    public function fnumber()
    {
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $numbers = DB::table('tbl_number')->paginate(8);
        $services = DB::table('tbl_service')->get();
        return view('pages.number',compact('info_user','numbers','services'));
    }

    public function fnew_number()
    {
        $services = DB::table('tbl_service')->get();
        $numbers = DB::table('tbl_number')->latest()->first();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.add_new_number',compact('info_user','services','numbers'));
    }

    public function new_number(Request $request)
    {
        $maxNumber = DB::table('tbl_number')->max('number');
        $nextNumber = $maxNumber + 1;
        $name = session('name');

        DB::table('tbl_number')->insert([
            'name' => $name,
            'service_name' => $request->service_name,
            'number' => $nextNumber,
            'issued_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'expired_at' => Carbon::now()->addHours(8)->format('Y-m-d H:i:s'),
            'source' => 'Kiosk',
            'status' => 'pending',
        ]);
        sleep(5);
        return Redirect::to('/add-new-number')->with('success', 'Thêm dịch vụ thành công!');
    }

    public function search(Request $request)
    {
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $keyword = $request->keyword;
         $services = DB::table('tbl_service')->get();
        $numbers = DB::table('tbl_number')
            ->where('name', 'like', '%'.$keyword.'%')
            ->orWhere('number', 'like', '%'.$keyword.'%')
            ->orWhere('service_name', 'like', '%'.$keyword.'%')
            ->orWhere('source', 'like', '%'.$keyword.'%')
            ->orWhere('status', 'like', '%'.$keyword.'%')
            ->paginate(8);

        return view('pages.number',compact('info_user','numbers','services'));

    }

    public function filterbyname(Request $request)
    {
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $services = DB::table('tbl_service')->get();
        $service_name = $request->input('service_name');
        $numbers = DB::table('tbl_number')
        ->when($service_name, function ($query, $service_name) {
            return $query->where('service_name', $service_name);
        })
        ->paginate(9);
        return view('pages.number',compact('info_user','numbers','services'));

    }

    public function filterbystatus(Request $request)
    {
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $services = DB::table('tbl_service')->get();
        $status = $request->input('status');
        $numbers = DB::table('tbl_number')
        ->when($status, function ($query, $status) {
            return $query->where('status', $status);
        })
        ->paginate(9);
        return view('pages.number',compact('info_user','numbers','services'));

    }

    public function filterbysource(Request $request)
    {
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $services = DB::table('tbl_service')->get();
        $source = $request->input('source');
        $numbers = DB::table('tbl_number')
        ->when($source, function ($query, $source) {
            return $query->where('source', $source);
        })
        ->paginate(9);
        return view('pages.number',compact('info_user','numbers','services'));

    }

    public function info_number($id)
    {
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $numbers = DB::table('tbl_number')->where('id', $id)->get();

        if ($numbers) {
            return view('pages.detail_number', compact('info_user', 'numbers'));
        } else {
            return redirect()->route('number')->with('error', 'Không tìm thấy thông tin');
        }
    }

    
}
