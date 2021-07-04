<!-- Phượng -->
@extends('admin_layout1')
@section('admin_content')
    <div>
        <h3 class="title">Danh mục</h3>
        <div class="x_panel">
            <div class="x_content">
                <form class="" action="{{ URL::to('/update-category1/'.$edit_category->category_id) }}" method="post" novalidate>
                    {{ csrf_field() }}
                    <span class="section">Cập nhật danh mục</span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tên danh mục<span></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" value="{{$edit_category->category_name}}" name="category_name" onkeyup="ChangeToSlug();" id="slug" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Slug</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="category_slug" id="convert_slug" required="required" value="{{$edit_category->category_slug}}" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Hiển thị</label>
                        
                        <div class="col-md-6 col-sm-6">
                            <select name="status" class="form-control input-sm">
                                @if($edit_category->status==1)
                                <option value="1" selected>Hiển thị</option>
                                <option value="0">Ẩn</option>
                                @else
                                <option value="1">Hiển thị</option>
                                <option value="0"selected>Ẩn</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" name="update_category" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<!-- End Phượng -->