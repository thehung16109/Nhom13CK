<!-- Phượng -->
@extends('admin_layout')
@section('admin_content')
    <div>
        <h3 class="title">Bài review</h3>
        <div class="x_panel">
            <div class="x_content">
                <form class="" action="{{ URL::to('/save-review') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <span class="section">Thêm bài review</span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-1 col-sm-1  label-align">Tiêu đề<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="review_title" onkeyup="ChangeToSlug();" id="slug" 
                            data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 kí tự."/>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-1 col-sm-1  label-align">Slug</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="review_slug" id="convert_slug" required="required"/>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-1 col-sm-1  label-align">Mô tả tóm tắt</label>
                        <div class="col-md-11 col-sm-11">
                            <textarea style="resize: none" rows="2" class="form-control" name="review_desc" required="required" ></textarea>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-1 col-sm-1  label-align">Nội dung</label>
                        <div class="col-md-11 col-sm-11">
                            <textarea style="resize: none" rows="5" class="form-control" name="review_content" required="required" ></textarea>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-1 col-sm-1  label-align">Hình đại điện</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="file" class="form-control-file" name="review_image" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-1 col-sm-1 label-align">Danh mục</label>   
                        <div class="col-md-2 col-sm-2">
                            <select class="form-control input-sm" name="category_id">
                                @foreach($category as $key => $cate)
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Hiển thị</label>                       
                        <div class="col-md-6 col-sm-6">
                            <select name="status" class="form-control input-sm">
                                <option value="1" selected>Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="field item form-group">
                    <div class="form-check col-md-2 col-sm-2 label-align mt-2">
                        <input class="form-check-input" type="checkbox" name="status" value="1" checked >
                        <label class="form-check-label" for="invalidCheck2" style="font-size: 110%;">
                            Kích hoạt
                        </label>
                    </div>
                        
                    </div>
                
                    <div class="col-md-6 offset-md-1 mb-3">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                        echo '<span style="color:red; font-weight: bold;">' . $message . '</span>';
                        Session::put('message', null);
                        }
                        ?>
                    </div>

                    <div class="col-md-6 offset-md-1">
                        <button type="submit" name="add_category" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
<!-- End Phượng -->