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
        return view('pages.insert_service');
    }

    public function fupdate_service($id)
    {
        $services = DB::table('tbl_service')->where('id', $id)->get();
        return view('pages.update_service',compact('services'));
    }

    public function service()
    {
        $services = DB::table('tbl_service')->paginate(8);
        return view('pages.service',compact('services'));
    }

    public function info_service($id)
    {
        $services = DB::table('tbl_service')->where('id', $id)->get();

        if ($services) {
            return view('pages.info_service', compact('services'));
        } else {
            return redirect()->route('service')->with('error', 'Không tìm thấy thông tin thiết bị');
        }
    }

    public function new_service(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'service_name' => 'required',
            'service_desc' => 'required',
        ]);

        DB::table('tbl_service')->insert([
            'service_id' => $request->service_id,
            'service_name' => $request->service_name,
            'service_desc' => $request->service_desc,
            'service_status' => 'active',
            'auto_increment' => $request->auto_increment ? 1 : 0,
            'prefix' => $request->prefix ? 1 : 0,
            'surfix' => $request->surfix ? 1 : 0,
            'reset_daily' => $request->reset_daily ? 1 : 0
        ]);

        return Redirect::to('/service')->with('success', 'Thêm dịch vụ thành công!');
    }

    public function update_service(Request $request, $id)
    {
        $this->CheckAuth();

        $affected = DB::table('tbl_service')
            ->where('id', $id)
            ->update([
                'service_id' => $request->service_id,
                'service_name' => $request->service_name,
                'service_desc' => $request->service_desc,
                'service_status' => 'active',
                'auto_increment' => $request->auto_increment ? 1 : 0,
                'prefix' => $request->prefix ? 1 : 0,
                'surfix' => $request->surfix ? 1 : 0,
                'reset_daily' => $request->reset_daily ? 1 : 0
            ]);

        if ($affected) {
            return redirect()->back()->with('success', 'Cập nhật dịch vụ thành công!');
        }

        return redirect()->back()->with('error', 'Không tìm thấy dịch vụ!');
    }


    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $services = DB::table('tbl_service')
            ->where('service_name', 'like', '%'.$keyword.'%')
            ->orWhere('service_id', 'like', '%'.$keyword.'%')
            ->orWhere('service_desc', 'like', '%'.$keyword.'%')
            ->paginate(8);

        return view('pages.service',compact('services'));

    }

    public function filterbystatus(Request $request)
    {
        $status = $request->input('status');

        $services = DB::table('tbl_service')
        ->when($status, function ($query, $status) {
            return $query->where('service_status', $status);
        })
        ->paginate(9);
        return view('pages.service',compact('services'));

    }



}
