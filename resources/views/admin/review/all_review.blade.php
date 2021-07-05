<!-- Phượng -->
@extends('admin_layout')
@section('admin_content')
    <div>
        <h3 class="title">Bài viết</h3>
        <div class="x_panel">
            <div class="x_content">
                <span class="section">Liệt kê bài viết</span>
                <div class="row">
                    <div class="col-sm-5">
                        <form class="form-inline">
                            <div>
                                <select class="form-control form-control-sm">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Delete selected</option>
                                    <option value="2">Bulk edit</option>
                                    <option value="3">Export</option>
                                </select>
                            </div>
                            <button class="btn btn-sm btn-primary ml-2 mt-1">Apply</button>
                        </form>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="input-group col-sm-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Tìm kiếm...">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-search"></i></button>
                        </span>
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
                <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:30px;">
                                    <label class="i-checks">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>Tiêu đề</th>
                                <th>Ảnh đại diện</th>
                                <th>Slug</th>
                                <th>Mô tả ngắn</th>
                                <th>Danh mục</th>
                                <th>Trạng thái</th>
                                <th style="width:65px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_review as $key => $review)
                                <tr>
                                    <td>
                                        <label class="i-checks">
                                            <input type="checkbox"><i></i>
                                        </label>
                                    </td>
                                    <td>{{ $review->review_title }}</td>
                                    <td><img src="../uploads/ReviewImage/{{$review->review_image}}" height="100" width="100"></td>
                                        {{-- src="{{asset('uploads/ReviewImage/'.$review->review_image)}}" --}}
                                    <td>{{ $review->review_slug }}</td>
                                    <td>{{ $review->review_desc }}</td>
                                    <td>{{ $review->review_id }}</td>
                                    <td>
                                        <?php if ($review->status == 0) { ?>
                                        <a href="{{URL::to('/unactive-review/'.$review->review_id)}}"><span class="fa-eye-slash-style fa fa-eye-slash"></span></a>
                                        <?php } else { ?>
                                        <a href="{{URL::to('/active-review/'.$review->review_id)}}"><span class="fa-eye-style fa fa-eye"></span></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/edit-review/'.$review->review_id)}}">
                                            <i class="fa fa-pencil-square-o text-success text-active" style="font-size: 20px"></i>
                                        </a>
                                        <a onclick="return confirm('Bạn chắc chắn muốn xóa bài viết này?')" href="{{URL::to('/delete-review/'.$review->review_id)}}">
                                          <i class="fa fa-times text-danger text" style="font-size: 20px"></i>
                                      </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <small>Hiển thị {!!$all_review->count()!!} danh mục trong số {!!$all_review->total()!!} danh mục</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination justify-content-end">
                            {!!$all_review->links()!!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- End Phượng -->