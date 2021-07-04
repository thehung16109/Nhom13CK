<!-- Phượng -->
@extends('admin_layout1')
@section('admin_content')
    <div>
        <h3 class="title">Địa điểm</h3>
        <div class="x_panel">
            <div class="x_content">
                <span class="section">Liệt kê địa điểm</span>
                <div class="row">
                    <div class="col-sm-5">
                        <form class="form-inline">
                            <div>
                                <select class="form-control form-control-sm">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Xóa</option>
                                    <option value="2">Cập nhật</option>
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
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:30px;">
                                    <label class="i-checks">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>STT</th>
                                <th>Tên địa điểm</th>
                                <th>Vùng miền</th>
                                <th>Trạng thái</th>
                                <th style="width:65px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_location as $key => $location)
                                <tr>
                                    <td>
                                        <label class="i-checks">
                                            <input type="checkbox"><i></i>
                                        </label>
                                    </td>
                                    <td>{{ $location->location_id }}</td>
                                    <td>{{ $location->location_name }}</td>
                                    <td>{{ $location->region }}</td>
                                    <td>
                                        <?php if ($location->status == 0) { ?>
                                        <a href="{{URL::to('/unactive-location1/'.$location->location_id)}}"><span class="fa-eye-slash-style fa fa-eye-slash"></span></a>
                                        <?php } else { ?>
                                        <a href="{{URL::to('/active-location1/'.$location->location_id)}}"><span class="fa-eye-style fa fa-eye"></span></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/edit-location1/'.$location->location_id)}}">
                                            <i class="fa fa-pencil-square-o text-success text-active" style="font-size: 20px"></i>
                                        </a>
                                        <a onclick="return confirm('Bạn chắc chắn muốn xóa địa điểm này?')" href="{{URL::to('/delete-location1/'.$location->location_id)}}">
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
                        <small>Showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- End Phượng -->