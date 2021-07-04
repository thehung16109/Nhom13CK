<!-- Phượng -->
@extends('admin_layout1')
@section('admin_content')
    <div>
        <h3 class="title">Danh mục</h3>
        <div class="x_panel">
            <div class="x_content">
                <span class="section">Liệt kê danh mục</span>
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
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:30px;">
                                    <label class="i-checks">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>Tên danh mục</th>
                                <th>Trạng thái</th>
                                <th style="width:55px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_category as $key => $cate_pro)
                                <tr>
                                    <td>
                                        <label class="i-checks">
                                            <input type="checkbox"><i></i>
                                        </label>
                                    </td>
                                    <td>{{ $cate_pro->category_name }}</td>
                                    <td>
                                        <?php if ($cate_pro->status == 0) { ?>
                                        <a href="{{URL::to('/unactive-category1/'.$cate_pro->category_id)}}"><span class="fa-eye-slash-style fa fa-eye-slash"></span></a>
                                        <?php } else { ?>
                                        <a href="{{URL::to('/active-category1/'.$cate_pro->category_id)}}"><span class="fa-eye-style fa fa-eye"></span></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="">
                                            <i class="fa fa-pencil-square-o text-success text-active"></i>
                                            <i class="fa fa-times text-danger text"></i>
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

    {{-- <div class="dataTables_paginate paging_simple_numbers" 
    id="datatable_paginate">
    <ul class="pagination">
        <li class="paginate_button previous disabled" id="datatable_previous">
            <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous
                </a></li><li class="paginate_button active">
                    <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a>
                </li><li class="paginate_button next disabled" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">Next</a></li></ul></div> --}}
    {{-- <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">Liệt kê danh mục sản phẩm</div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
                      
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên danh mục</th>
            <th>Slug</th>
            <th>Hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           
            <td>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div> --}}
@endsection

<!-- End Phượng -->