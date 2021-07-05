<?php
/* Phượng */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Category1;
use App\Review1;

session_start();

class ReviewController1 extends Controller
{
    public function add_review(){
        $this->AuthLogin1();
        $category = Category1::orderBy('category_id', 'DESC')->get();
        return view('admin.review1.add_review')->with(compact('category'));
    }

    public function save_review(Request $request){
        $this->AuthLogin1();

        $data = $request->all();
        $review = new Review1();
        $review->review_title = $data['review_title'];
        $review->review_slug = $data['review_slug'];
        $review->review_desc = $data['review_desc'];
        $review->review_content = $data['review_content'];

        if(isset($data['status'])) {
            $review->status = 1;
        } else {
            $review->status = 0;
        }

        $review->category_id = $data['category_id'];

        $get_image = $request->file('review_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/ReviewImage', $new_image);

            $review->review_image = $new_image;

            $review->save();
            Session::put('message', 'Thêm bài viết thành công.');
            return redirect()->back();
        } else {
            Session::put('message', 'Hãy thêm ảnh đại diện cho bài viết.');
            return redirect()->back();
        }
    }

    public function all_review(){
        $this->AuthLogin1();
        
        $all_review = Review1::orderBy('review_id')->paginate(10);
    
        return view('admin.review1.all_review')->with(compact('all_review'), $all_review);
    }

    public function unactive_review($review_id){
        $this->AuthLogin1();
        $review = Review1::find($review_id);
        $review->status = 0;
        $review->save();
        // DB::table('tbl_review1')->where('review_id', $review_id)->update(['status'=>0]);
        Session::put('message', 'Thành công ẩn bài viết.');
        // return Redirect::to('all-review1');
        return redirect()->back();
    }

    public function active_review($review_id){
        $this->AuthLogin1();
        $review = Review1::find($review_id);
        $review->status = 1;
        $review->save();

        // DB::table('tbl_review1')->where('review_id', $review_id)->update(['status'=>1]);
        Session::put('message', 'Kích hoạt bài viết thành công.');
        // return Redirect::to('all-review1');
        return redirect()->back();
    }

    // public function edit_review($review_id){
    //     // $this->AuthLogin1();

    //     $edit_review = Review1::find($review_id);
        
    //     return view('admin.review1.edit_review')->with(compact('edit_review'));
    // }

    // public function update_review(Request $request, $review_id){
    //     // $this->AuthLogin1();

    //     $data = $request->all();
    //     $review = Review1::find($review_id);
    //     $review->review_name = $data['review_name'];
    //     $review->review_slug = $data['review_slug'];
    //     $review->status = $data['status'];
    //     $review->save();

    //     Session::put('message', 'Cập nhật danh mục thành công.');
    //     return redirect('/all-review1');
    // }

    public function delete_review($review_id){
        $this->AuthLogin1();

        $review = Review1::find($review_id);
        $review_image = $review->review_image;
        if($review_image){
            unlink('uploads/ReviewImage/'.$review_image);
        }
        $review->delete();

        Session::put('message', 'Xóa bài viết thành công.');
        return redirect()->back();
    }

    // public function get_review_slug($review_slug){

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
