<?php
/* Phượng */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class CategoryController1 extends Controller
{
    public function add_category(){
        return view('admin.category1.add_category');
    }

    public function all_category(){
        $all_category = DB::table('tbl_category1')->get();
        $manager_all_category = view('admin.category1.all_category')->with('all_category', $all_category);
        return view('admin_layout1')->with('admin.category1.all_category', $manager_all_category);
    }

    public function save_category(Request $request){
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        DB::table('tbl_category1')->insert($data);
        Session::put('message', 'Thêm danh mục thành công.');
        return Redirect::to('add-category1');
    }

    public function unactive_category($category_id){
        DB::table('tbl_category1')->where('category_id', $category_id)->update(['status'=>0]);
        Session::put('message', 'Thành công ẩn danh mục.');
        return Redirect::to('all-category1');
    }

    public function active_category($category_id){
        DB::table('tbl_category1')->where('category_id', $category_id)->update(['status'=>1]);
        Session::put('message', 'Kích hoạt danh mục thành công.');
        return Redirect::to('all-category1');
    }
}
/* End Phượng */
