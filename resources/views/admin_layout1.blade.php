<!-- Phượng -->

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="server/images/2.ico" type="image/ico" />
    <title>HomeStay Review</title>

    <!-- Bootstrap -->
    <link href="../server/Others/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../server/Others/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../server/Others/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="../server/Others/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../server/CSS/custom.min.css" rel="stylesheet">
    <link href="../server/CSS/dashboard.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="./index.html" class="site_title"><img src="../server/images/logo.png" alt="" ></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../server/images/1.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2><?php
                  $name = Session::get('admin_name');
                  if ($name) {
                      echo $name;
                  }
      ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a a href="{{URL::to('/trang-chu1')}}"><i class="fa fa-home"></i> Trang chủ </a>
                  </li>
                  <li><a><i class="fa fa-list-alt"></i>Danh mục<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                     
                      <li><a href="{{URL::to('/add-category1')}}">Thêm danh mục</a></li>
                      <li><a href="{{URL::to('/all-category1')}}">Liệt kê danh mục</a></li>              
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-map-marker"></i>Địa điểm<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                     
                      <li><a href="{{URL::to('/add-location1')}}">Thêm địa điểm</a></li>
                      <li><a href="{{URL::to('/all-location1')}}">Liệt kê điạ điểm</a></li>              
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-edit"></i>Bài review<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                     
                      <li><a href="{{URL::to('/add-review1')}}">Thêm bài review</a></li>
                      <li><a href="{{URL::to('/all-review1')}}">Liệt kê bài review</a></li>              
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-edit"></i>Danh mục bài review<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                     
                      <li><a href="./form_validation.html">Thêm bài review</a></li>
                      <li><a href="./form_wizards.html">Liệt kê</a></li> 
                      <li><a href="./form_upload.html">Đăng bài</a></li>                   
                    </ul>
                  </li>                  
                  <li><a><i class="fa fa-table"></i> Quản lí <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                     
                      <li><a href="./Staff.html">Quản lí nhân viên</a></li>
                      <li><a href="./member.html">Quản lí thành viên</a></li>                      
                      <li><a href="./projects.html">Quản lí bài viết</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Báo cáo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="./index.html">Báo cáo người dùng</a></li>
                      <li><a href="./index2.html">Báo cáo trang web</a></li>
                    </ul>
                  </li>                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{URL::to('/logout1')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../server/images/1.jpg" alt="">
                    <span>
                        <?php
                        $name = Session::get('admin_name');
                        if ($name) {
                            echo $name;
                        }
            ?>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;">Hồ sơ</a>
                    <a class="dropdown-item"  href="{{URL::to('/logout1')}}"><i class="fa fa-sign-out pull-right"></i>Đăng xuất</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="../server/images/1.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Khu Ngai</span>
                          <span class="time">3 phút trước</span>
                        </span>
                        <span class="message">
                          Tôi rất thích Web này, mong các bạn sẽ phát triển thêm...
                        </span>
                      </a>
                    </li>                                                     
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>Xem tất cả thông báo</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div class="right_col" role="main">
            @yield('admin_content')
        </div>


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Review Homestay
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../server/Others/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../server/Others/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../server/Others/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../server/Others/vendors/nprogress/nprogress.js"></script>
    <!-- Dropzone.js -->
    <script src="../server/Others/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../server/JS/custom.min.js"></script>

    <script type="text/javascript">
 
      function ChangeToSlug()
          {
              var slug;
           
              //Lấy text từ thẻ input title 
              slug = document.getElementById("slug").value;
              slug = slug.toLowerCase();
              //Đổi ký tự có dấu thành không dấu
                  slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                  slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                  slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                  slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                  slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                  slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                  slug = slug.replace(/đ/gi, 'd');
                  //Xóa các ký tự đặt biệt
                  slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                  //Đổi khoảng trắng thành ký tự gạch ngang
                  slug = slug.replace(/ /gi, "-");
                  //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                  //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                  slug = slug.replace(/\-\-\-\-\-/gi, '-');
                  slug = slug.replace(/\-\-\-\-/gi, '-');
                  slug = slug.replace(/\-\-\-/gi, '-');
                  slug = slug.replace(/\-\-/gi, '-');
                  //Xóa các ký tự gạch ngang ở đầu và cuối
                  slug = '@' + slug + '@';
                  slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                  //In slug ra textbox có id “slug”
              document.getElementById('convert_slug').value = slug;
          }
  </script>
  </body>
</html>

<!-- End Phượng -->