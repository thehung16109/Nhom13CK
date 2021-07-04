<!-- Phượng -->
@extends('admin_layout1')
@section('admin_content')
    <div>
        <h3 class="title">Danh mục</h3>
        <div class="x_panel">
            <div class="x_content">
                @foreach ($edit_category as $key => $edit_value)
                <form class="" action="{{ URL::to('/update-category1/'.$edit_value->category_id) }}" method="post" novalidate>
                    {{ csrf_field() }}
                    <span class="section">Cập nhật danh mục</span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tên danh mục<span></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" value="{{$edit_value->category_name}}" name="category_name" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Mô tả</label>
                        <div class="col-md-6 col-sm-6">
                            <textarea class="form-control" rows="6" cols="50" style="resize:none" name="description">{{$edit_value->description}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6 offset-md-3">
                        <button type="submit" name="update_category" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
<!-- End Phượng -->