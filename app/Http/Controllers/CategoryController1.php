<?php
/* Phượng */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Category1;

session_start();

class CategoryController1 extends Controller
{
    public function add_category(){
        $this->AuthLogin1();
        return view('admin.category1.add_category');
    }

    public function all_category(){
        $this->AuthLogin1();

        // $all_category = DB::table('tbl_category1')->orderBy('category_id', 'DESC')->paginate(1);
        // $manager_all_category = view('admin.category1.all_category')->with('all_category', $all_category);
        // return view('admin_layout1')->with('admin.category1.all_category', $manager_all_category);

        $all_category = Category1::orderBy('category_id', 'DESC')->paginate(1);
        return view('admin.category1.all_category')->with(compact('all_category'));
    }

    public function save_category(Request $request){
        $this->AuthLogin1();

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['category_slug'] = $request->category_slug;
        // $data['status'] = $request->status;

        // DB::table('tbl_category1')->insert($data);
        // Session::put('message', 'Thêm danh mục thành công.');
        // return Redirect::to('add-category1');

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

        // DB::table('tbl_category1')->where('category_id', $category_id)->update(['status'=>0]);
        // Session::put('message', 'Thành công ẩn danh mục.');
        // return Redirect::to('all-category1');

        $category = Category1::find($category_id);
        $category->status = 0;
        $category->save();
        Session::put('message', 'Thành công ẩn danh mục.');
        return redirect()->back();     
    }

    public function active_category($category_id){
        $this->AuthLogin1();

        // DB::table('tbl_category1')->where('category_id', $category_id)->update(['status'=>1]);
        // Session::put('message', 'Kích hoạt danh mục thành công.');
        // return Redirect::to('all-category1');
        
        $category = Category1::find($category_id);
        $category->status = 1;
        $category->save();
        Session::put('message', 'Kích hoạt danh mục thành công.');
        return redirect()->back();
    }

    public function edit_category($category_id){
        $this->AuthLogin1();

        // $edit_category = DB::table('tbl_category1')->where('category_id', $category_id)->get();
        // $manager_category = view('admin.category1.edit_category')->with('edit_category', $edit_category);
        // return view('admin_layout1')->with('admin.category1.edit_category', $manager_category);

        $edit_category = Category1::find($category_id);
        return view('admin.category1.edit_category')->with(compact('edit_category'));
    }

    public function update_category(Request $request, $category_id){
        $this->AuthLogin1();

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['category_slug'] = $request->category_slug;
        // $data['status'] = $request->status;
        // DB::table('tbl_category1')->where('category_id', $category_id)->update($data);
        // Session::put('message', 'Cập nhật địa điểm thành công.');
        // return Redirect::to('all-category1');

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

        // DB::table('tbl_category1')->where('category_id', $category_id)->delete();
        // Session::put('message', 'Xóa địa điểm thành công.');
        // return Redirect::to('all-category1');

        $category = Category1::find($category_id);
        $category->delete();
        Session::put('message', 'Xóa danh mục thành công.');
        return redirect()->back();
    }

    // public function get_category_slug($category_slug){

    // }

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
