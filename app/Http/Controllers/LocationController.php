<?php
/* Phượng */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class LocationController extends Controller
{
    public function add_location(){
        $this->AuthLogin();
        return view('admin.location.add_location');
    }

    public function all_location(){
        $this->AuthLogin();
        $all_location = DB::table('tbl_location')->get();
        $manager_all_location = view('admin.location.all_location')->with('all_location', $all_location);
        return view('admin_layout1')->with('admin.location.all_location', $manager_all_location);
    }

    public function save_location(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['location_name'] = $request->location_name;
        $data['region'] = $request->region;
        $data['status'] = $request->status;

        DB::table('tbl_location')->insert($data);
        Session::put('message', 'Thêm địa điểm thành công.');
        return Redirect::to('add-location');
    }

    public function unactive_location($location_id){
        $this->AuthLogin();
        DB::table('tbl_location')->where('location_id', $location_id)->update(['status'=>0]);
        Session::put('message', 'Thành công ẩn địa điểm.');
        return Redirect::to('all-location');
    }

    public function active_location($location_id){
        $this->AuthLogin();
        DB::table('tbl_location')->where('location_id', $location_id)->update(['status'=>1]);
        Session::put('message', 'Kích hoạt địa điểm thành công.');
        return Redirect::to('all-location');
    }

    public function edit_location($location_id){
        $this->AuthLogin();
        $edit_location = DB::table('tbl_location')->where('location_id', $location_id)->get();
        $manager_location = view('admin.location.edit_location')->with('edit_location', $edit_location);
        return view('admin_layout')->with('admin.location.edit_location', $manager_location);
    }

    public function update_location(Request $request, $location_id){
        $this->AuthLogin();
        $data = array();
        $data['location_name'] = $request->location_name;
        $data['region'] = $request->region;
        DB::table('tbl_location')->where('location_id', $location_id)->update($data);
        Session::put('message', 'Cập nhật địa điểm thành công.');
        return Redirect::to('all-location');
    }

    public function delete_location($location_id){
        $this->AuthLogin();
        DB::table('tbl_location')->where('location_id', $location_id)->delete();
        Session::put('message', 'Xóa địa điểm thành công.');
        return Redirect::to('all-location');
    }

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
}

/* End Phượng */