<!-- Phượng -->
<!-- Author: Nguyen Thi Bich Phuong, 17520926 -->
<!-- Author: Phung The Hung, 18520808 -->

<!doctype html>
<html lang="en">

<head>
    <title>Review HomeStay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- wowJS -->
    <link rel="stylesheet" href="client/Others/lib/WOW-master/css/libs/animate.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/client/CSS/home.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" />
</head>

<body>
    <section class="header">
        <div class="container mt-4 px-0">
            <img src="/client/images/logo.png" alt="">
        </div>

        <div class="container mt-4">
            <nav class="navbar navbar-expand-lg container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{URL::to('/trang-chu')}}" style="color: #f68a39;">Trang chủ <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./homestay.html">HomeStay <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./hotel.html">Khách sạn <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./camnangphuot.html">Cẩm nang phượt <span
                                    class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <div class="search-box">
                                    <input type="text" placeholder="Từ khóa...">
                                    <div id="search" class="search-btn">
                                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                    <div id="cancel" class="cancel-btn">
                                        <a class="nav-link" href="#"><i class="fas fa-times" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.html"><i class="fas fa-user-circle fa-lg"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </form>
                </div>
            </nav>
        </div>
    </section>

    <div>
        @yield('trangchu')
    </div>

    <!-- Footer -->
    <footer class="footer text-white pt-5 pb-4 mt-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <h3 class="mb-5">About us</h3>
                    <p>Chuyên trang Review & đánh giá các homestay - hostel - resort mới nhất, có view đẹp nhất với chi
                        phí phải chăng....</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tìm kiếm...">
                        <div class="input-group-append">
                            <span class="input-group-text">Tìm kiếm</span>
                        </div>
                    </div>
                    <div class="chinhanh">
                        <span>Chi nhánh: </span>
                        <a href="">Đà Lạt</a>
                        <a href="">Hà Nội</a>
                        <a href="">Sài Gòn</a>
                    </div>
                    <a class="lienhe" href="">Liên hệ truyền thông quảng cáo: 0999999999</a>
                </div>

                <div class="col-md-4 col-lg-4 col-xl-4">
                    <h3 class="mb-5">Home stay miền bắc</h3>
                    <div class="row footer-item">
                        <div class="col-md-3">
                            <img src="/client/images/footer/1.jpeg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay Đà Bắc</h5>
                            <p>Thiết kế đậm hồn dân tộc.</p>
                        </div>
                    </div>
                    <div class="row footer-item">
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <img src="/client/images/footer/2.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay Hoa Ban</h5>
                            <p>Lối kiến trúc của người Thái.</p>
                        </div>
                    </div>
                    <div class="row footer-item">
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <img src="/client/images/footer/3.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay Green Ribbon </h5>
                            <p>Không gian sống hiện đại.</p>
                        </div>
                    </div>
                    <div class="row footer-item">
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <img src="/client/images/footer/4.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay Black Swan</h5>
                            <p>Thiết kế vô cùng mới lạ.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-xl-4">
                    <h3 class="mb-5">Home stay miền nam</h3>
                    <div class="row footer-item">
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <img src="/client/images/footer/5.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay One love</h5>
                            <p>Không gian cổ điển với chất liệu gỗ.</p>
                        </div>
                    </div>
                    <div class="row footer-item">
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <img src="/client/images/footer/6.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay Ecolodge</h5>
                            <p>View đẹp nhất Phú Quốc.</p>
                        </div>
                    </div>
                    <div class="row footer-item">
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <img src="/client/images/footer/7.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay Dylan</h5>
                            <p>Thu hút ánh nhìn của du khách.</p>
                        </div>
                    </div>
                    <div class="row footer-item">
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <img src="/client/images/footer/8.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9">
                            <h5>Homestay Lotus</h5>
                            <p>Không gian với hương vị của biển cả.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid final-footer">
            <div class="container d-flex justify-content-between">
                <p>© 2017 - All Rights Reserved.</p>
                <p>Website Design: <a href="">Homestay Review</a></p>
            </div>
        </div>
        </div>
    </footer>

    <button onclick="topFunction()" id="myBtn"><i class="fa fa-arrow-up"></i></button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- wowjs -->
    <script src="/client/Others/lib/WOW-master/wow/wow.min.js"></script>
    <script>
        wow = new WOW(
            {
                boxClass: 'wow',      // default

            }
        )
        wow.init();
    </script>
    <script src="/client/JS/home.js"></script>
</body>

</html>
<!-- End Phượng -->