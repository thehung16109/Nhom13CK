<!-- Phượng -->
@extends('admin_layout')
@section('admin_content')
    <div>
        <h3 class="title">Danh mục</h3>
        <div class="x_panel">
            <div class="x_content">
                <form class="" action="{{ URL::to('/save-category') }}" method="post" novalidate>
                    {{ csrf_field() }}
                    <span class="section">Thêm danh mục</span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tên danh mục<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="category_name" onkeyup="ChangeToSlug();" id="slug" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Slug</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="category_slug" id="convert_slug" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Hiển thị</label>
                        
                        <div class="col-md-6 col-sm-6">
                            <select name="status" class="form-control input-sm">
                                <option value="1" selected>Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 mb-3">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                        echo '<span style="color:red; font-weight: bold;">' . $message . '</span>';
                        Session::put('message', null);
                        }
                        ?>
                    </div>

                    <div class="col-md-6 offset-md-3">
                        <button type="submit" name="add_category" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
<!-- End Phượng -->