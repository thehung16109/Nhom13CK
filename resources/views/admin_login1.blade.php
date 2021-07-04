<!-- Phượng -->
<!DOCTYPE html>

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- bootstrap-css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="server/CSS/style.css" rel='stylesheet' type='text/css' />
    <link href="server/CSS/style-responsive.css" rel="stylesheet" />

    {{-- <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> --}}
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" />
    <!-- //font-awesome icons -->
    {{-- <script src="js/jquery2.0.3.min.js"></script> --}}
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>ADMIN ĐĂNG NHẬP</h2>
            <?php
            $message = Session::get('message');
            if ($message) {
            echo '<span class="text-alert">' . $message . '</span>';
            Session::put('message', null);
            }
            ?>
            <form action="{{ URL::to('/admin-dashboard1') }}" method="post">
                {{ csrf_field() }}
                @foreach ($errors->all() as $val)
                    <ul>
                        <li>{{ $val }}</li>
                    </ul>
                @endforeach
                <input type="text" class="ggg" name="admin_email" placeholder="Email">
                <input type="password" class="ggg" name="admin_password" placeholder="Password">

                <span><input type="checkbox" />Nhớ đăng nhập</span>
                <h6><a href="#">Quên mật khẩu</a></h6>
                <div class="clearfix"></div>
                <input type="submit" value="Đăng nhập" name="login">

            </form>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    {{-- <script src="{{asset('/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script> --}}
    {{-- <script src="{{asset('/backend/js/scripts.js')}}"></script>
<script src="{{asset('/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('/backend/js/jquery.nicescroll.js')}}"></script> --}}
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    {{-- <script src="{{asset('/backend/js/jquery.scrollTo.js')}}"></script> --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
</body>

</html>

<!-- End Phượng -->