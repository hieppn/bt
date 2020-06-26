<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Page Title</title>

    <link rel="icon" href="/favicon.ico">
    <link rel="canonical" href="https://mysite.com/mypage">
    <!--Bootstrap CSS-->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-warning text-dark">
    <a href="/admin/dashboard"><buttom>June BB</buttom> <img src="img/logo.jpg" alt="" width="50px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home">
                        <i class="fa fa-home"></i>
                        Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i>
                            <img src="img/sanpham.png" width="25px"><br>
                        </i>
                        Sản phẩm
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i>
                            <img src="img/news.png" width="25px"><br>
                        </i>
                        Tin tức

                    </a>
            </ul>
            @if(Auth::user())
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="/cart">
                        <i>
                            <span style="color: red;">{{ $carts->count()}}</span>
                            <img src="img/cart.png" width="25px"><br>
                        </i>
                        Giỏ hàng
                    </a>
                </li>
            </ul>
            @endif
            <ul>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                @if(Auth::user())
                <strong>{{ strtoupper(Auth::user()->name) }}</strong>
                <br>
                <!-- <a href="/admin/dashboard"><buttom>Admin</buttom></a>
                    <a href="/user/interface"><buttom>User</buttom></a> -->
                <div class="d-inline p-2">{{Auth::user()->name}}</div>
                <form action="/auth/logout" method="get">
                    <button><img class="img-fluid" src="/img/logout.png" alt=""> Đăng xuất</button></form>
                </form>
                @else
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <button><img class="img-fluid" src="/img/login.png" alt=""> Đăng nhập</button></form>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <button><img class="img-fluid" src="/img/signup.png" alt=""> Đăng kí</button></form>
                @endif
            </ul>
            <form class="form-inline my-2 my-lg-0" style="margin-left:20px;">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="img/slide1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/slide2.jpg" style="width:100%">
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="{{ asset('js/slide.js') }}"></script>
</body>

</html>