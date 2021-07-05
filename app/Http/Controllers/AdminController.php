<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Admin;
session_start();

class AdminController extends Controller
{
    /* Phượng */
    public function index() {
        return view('admin_login');
    }

    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $data = $request->all();
        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);

        $admin = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        $admin_count = $admin->count();
        if($admin_count){
            Session::put('admin_name', $admin->admin_name);
            Session::put('admin_id', $admin->admin_id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Mật khẩu hặc tài khoản đã nhập không chính xác. Mời nhập lại.');
            return Redirect::to('/admin');
        }
        // $admin_email = $request->admin_email;
        // $admin_password = md5($request->admin_password);

        // $result = DB::table('tbl_admin1')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        // if($result) {
        //     Session::put('admin_name', $result->admin_name);
        //     Session::put('admin_id', $result->admin_id);
        //     return Redirect::to('/dashboard1');
        // }
        // else {
        //     Session::put('message', 'Mật khẩu hặc tài khoản đã nhập không chính xác. Mời nhập lại.');
        //     return Redirect::to('/admin1');
        // }
    }

    public function logout(){
        $this->AuthLogin1();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard1');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    /* End Phượng */
}
