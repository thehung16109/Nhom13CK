<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Category1;

session_start();

class ReviewController1 extends Controller
{
    public function add_category(){
        $this->AuthLogin1();
        return view('admin.category1.add_category');
    }

    public function all_category(){
        $this->AuthLogin1();
        
        $all_category = Category1::orderBy('category_id', 'DESC')->paginate(1);

        return view('admin.category1.all_category')->with(compact('all_category'));
    }

    public function save_category(Request $request){
        $this->AuthLogin1();

        $data = $request->all();
        $category = new Category1();
        $category->category_name = $data['category_name'];
        $category->category_slug = $data['category_slug'];
        $category->status = $data['status'];
        $category->save();

        Session::put('message', 'Thêm danh mục thành công.');
        return redirect()->back();
    }

    public function unactive_category($category_id){
        $this->AuthLogin1();
        DB::table('tbl_category1')->where('category_id', $category_id)->update(['status'=>0]);
        Session::put('message', 'Thành công ẩn danh mục.');
        return Redirect::to('all-category1');
    }

    public function active_category($category_id){
        $this->AuthLogin1();

        DB::table('tbl_category1')->where('category_id', $category_id)->update(['status'=>1]);
        Session::put('message', 'Kích hoạt danh mục thành công.');
        return Redirect::to('all-category1');
    }

    public function edit_category($category_id){
        $this->AuthLogin1();

        $edit_category = Category1::find($category_id);
        
        return view('admin.category1.edit_category')->with(compact('edit_category'));
    }

    public function update_category(Request $request, $category_id){
        $this->AuthLogin1();

        $data = $request->all();
        $category = Category1::find($category_id);
        $category->category_name = $data['category_name'];
        $category->category_slug = $data['category_slug'];
        $category->status = $data['status'];
        $category->save();

        Session::put('message', 'Cập nhật danh mục thành công.');
        return redirect('/all-category1');
    }

    public function delete_category($category_id){
        $this->AuthLogin1();

        $category = Category1::find($category_id);
        $category->delete();

        Session::put('message', 'Xóa danh mục thành công.');
        return redirect()->back();
    }

    public function get_category_slug($category_slug){

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
