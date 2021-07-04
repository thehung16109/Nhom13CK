<!-- Phượng -->
@extends('admin_layout1')
@section('admin_content')
    <div>
        <h3 class="title">Địa điểm</h3>
        <div class="x_panel">
            <div class="x_content">
                @foreach ($edit_location as $key => $edit_value)
                <form class="" action="{{ URL::to('/update-location1/'.$edit_value->location_id) }}" method="post" novalidate>
                    {{ csrf_field() }}
                    <span class="section">Cập nhật địa điểm</span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tên địa điểm<span></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" value="{{$edit_value->location_name}}" name="location_name" />
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" name="update_location" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
<!-- End Phượng -->