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

class DeviceController extends Controller
{
    public function CheckAuth()
    {
        if (Session::has('id')) {
            return redirect('/dashboard');
        } else {
            return redirect('/flogin');
        }
    }

     public function device()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $devices = DB::table('tbl_device')->get();

        return view('pages.device',compact('info_user','devices'));
    }

     public function finsert_device()
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.insert_device',compact('info_user'));
    }

    public function info_device($id)
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();

        // Lấy thông tin của thiết bị từ cơ sở dữ liệu
        $device = DB::table('tbl_device')->where('id', $id)->get();

        // Kiểm tra xem thiết bị có tồn tại hay không
        if ($device) {
            // Truyền thông tin của thiết bị vào view thông qua biến compact
            return view('pages.info_device', compact('info_user', 'device'));
        } else {
            // Xử lý khi không tìm thấy thiết bị
            return redirect()->route('device')->with('error', 'Không tìm thấy thông tin thiết bị');
        }
    }


    public function fupdate_device($id)
    {
        $this->CheckAuth();
        $info_user = DB::table('users')->where('id', Session::get('id'))->get();
        $device = DB::table('tbl_device')->where('id', $id)->get();
        return view('pages.update_device',compact('info_user','device'));
    }

    public function update_device(Request $request, $id)
    {
        $this->CheckAuth();
        $request->validate([
            'device_name' => 'required',
            'username' => 'required',
            'device_type' => 'required',
            'ip_address' => 'required',
            'service' => 'required',
            'password' => 'required'
        ]);

        $affected = DB::table('tbl_device')
            ->where('id', $id)
            ->update([
                'device_name' => $request->device_name,
                'username' => $request->username,
                'device_type' => $request->device_type,
                'ip_address' => $request->ip_address,
                'service' => $request->service,
                'password' => $request->password
            ]);
        $affected->save();
        if ($affected) {
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Không tìm thấy thiết bị !');
    }

    public function new_device(Request $request)
    {
        $request->validate([
            'device_id' => 'required',
            'device_name' => 'required',
            'username' => 'required',
            'device_type' => 'required',
            'ip_address' => 'required',
            'service' => 'required',
            'password' => 'required'
        ]);

        DB::table('tbl_device')->insert([
            'device_id' => $request->device_id,
            'device_name' => $request->device_name,
            'username' => $request->username,
            'device_type' => $request->device_type,
            'ip_address' => $request->ip_address,
            'service' => $request->service,
            'password' => $request->password
        ]);
        return Redirect::to('/device')->with('success', 'Thêm thiết bị thành công!');
    }


}
