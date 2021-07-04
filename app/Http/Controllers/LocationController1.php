<?php
/* Phượng */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class LocationController1 extends Controller
{
    public function add_location(){
        $this->AuthLogin1();
        return view('admin.location1.add_location');
    }

    public function all_location(){
        $this->AuthLogin1();
        $all_location = DB::table('tbl_location1')->get();
        $manager_all_location = view('admin.location1.all_location')->with('all_location', $all_location);
        return view('admin_layout1')->with('admin.location1.all_location', $manager_all_location);
    }

    public function save_location(Request $request){
        $this->AuthLogin1();
        $data = array();
        $data['location_name'] = $request->location_name;
        $data['region'] = $request->region;
        $data['status'] = $request->status;

        DB::table('tbl_location1')->insert($data);
        Session::put('message', 'Thêm địa điểm thành công.');
        return Redirect::to('add-location1');
    }

    public function unactive_location($location_id){
        $this->AuthLogin1();
        DB::table('tbl_location1')->where('location_id', $location_id)->update(['status'=>0]);
        Session::put('message', 'Thành công ẩn địa điểm.');
        return Redirect::to('all-location1');
    }

    public function active_location($location_id){
        $this->AuthLogin1();
        DB::table('tbl_location1')->where('location_id', $location_id)->update(['status'=>1]);
        Session::put('message', 'Kích hoạt địa điểm thành công.');
        return Redirect::to('all-location1');
    }

    public function edit_location($location_id){
        $this->AuthLogin1();
        $edit_location = DB::table('tbl_location1')->where('location_id', $location_id)->get();
        $manager_location = view('admin.location1.edit_location')->with('edit_location', $edit_location);
        return view('admin_layout1')->with('admin.location1.edit_location', $manager_location);
    }

    public function update_location(Request $request, $location_id){
        $this->AuthLogin1();
        $data = array();
        $data['location_name'] = $request->location_name;
        $data['region'] = $request->region;
        DB::table('tbl_location1')->where('location_id', $location_id)->update($data);
        Session::put('message', 'Cập nhật địa điểm thành công.');
        return Redirect::to('all-location1');
    }

    public function delete_location($location_id){
        $this->AuthLogin1();
        DB::table('tbl_location1')->where('location_id', $location_id)->delete();
        Session::put('message', 'Xóa địa điểm thành công.');
        return Redirect::to('all-location1');
    }

    public function AuthLogin1(){
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard1');
        } else {
            return Redirect::to('admin1')->send();
        }
    }
}

/* End Phượng */