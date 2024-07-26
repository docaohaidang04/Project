<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('img/logo.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>

</head>

<body>

    <!-- <div class="header">
    <a style="color: #ffffff;text-decoration: none;" href="index.php">MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH >
        300K
        - ĐỔI TRẢ TRONG 30 NGÀY - ĐẢM BẢO CHẤT LƯỢNG</a>
</div> -->

    <header class="row p-0 m-0 d-flex justify-content-center" style="background-color: black;">
        @include('module.header')
    </header>

    <div class="banner">
        @yield('banner')
    </div>
    @yield('nav')
    <!-- <nav class="row  p-3 d-flex justify-content-center">
        <div class="main">
            <div class="container">
                <div class="nav"></div>
                <div class="row">
                    <div class="col">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-truck-fast"></i>
                                Miễn phí vận chuyển.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-gift"></i>
                                Quà tặng hấp dẫn.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-medal"></i>
                                Bảo đảm chất lượng.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-headset"></i>
                                Hotline: 0338815149.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav> -->
    <!-- <nav class="row  p-3 d-flex justify-content-center">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col col-md-2">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body text-center">
                            <a href="" class="image-link"><img src="img/polo.png" alt="" style="width: 80px;">
                                <br>
                                <h5 class="card-title">Áo Polo</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body text-center">
                            <a href="" class="image-link"><img src="img/aothun.png" alt="" style="width: 100px;">
                                <br>
                                <h5 class="card-title">Áo thun</h5>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body text-center">
                            <a href="" class="image-link"><img src="img/aokhoac.png" alt="" style="width: 100px;">
                                <br>
                                <h5 class="card-title">Áo Khoác</h5>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body text-center">
                            <a href="" class="image-link"><img src="img/spnoibat.png" alt="" style="width: 100px;">
                                <br>
                                <h5 class="card-title">Sản phẩm nổi bật</h5>
                            </a>


                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body text-center">
                            <a href="" class="image-link"><img src="img/quanjean.png" alt="" style="width: 67px;">
                                <br>
                                <h5 class="card-title">Quần jean</h5>
                            </a>


                        </div>
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body text-center">
                            <a href="" class="image-link"><img src="img/quan.png" alt="" style="width: 100px;">
                                <br>
                                <h5 class="card-title">Quần</h5>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav> -->

    <!-- <nav class="row  p-3 d-flex justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="container mt-2">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="voucher">
                                    <img src="img/voucher.png" alt="Voucher Image">
                                    <h3 class="mb-4">Nhận ưu đãi đặc biệt!</h3>
                                    <p class="lead">Nhập mã giảm giá <strong>SPRINGSALE10</strong> để nhận 10% giảm giá
                                        cho tất cả các sản
                                        phẩm!</p>
                                    <button type="button" class="btn btn-primary">Mua sắm ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container mt-2">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                
                                <div class="voucher">
                                    <img src="img/voucher.png" alt="Voucher Image">
                                    <h3 class="mb-4">Nhận ưu đãi đặc biệt!</h3>
                                    <p class="lead">Nhập mã giảm giá <strong>SPRINGSALE10</strong> để nhận 10% giảm giá
                                        cho tất cả các
                                        sản
                                        phẩm!</p>
                                    <button type="button" class="btn btn-primary">Mua sắm ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container mt-2">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                              
                                <div class="voucher">
                                    <img src="img/voucher.png" alt="Voucher Image">
                                    <h3 class="mb-4">Nhận ưu đãi đặc biệt!</h3>
                                    <p class="lead">Nhập mã giảm giá <strong>SPRINGSALE10</strong> để nhận 10% giảm giá
                                        cho tất cả các
                                        sản
                                        phẩm!</p>
                                    <button type="button" class="btn btn-primary">Mua sắm ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav> -->
    <div class="spacer" style="height: 50px;"></div>
    @yield('content')

    <footer class="row p-2 m-0 d-flex justify-content-center" style="background-color: black; ">
        @include('module.footer')
    </footer>

    <!-- modal -->
    @yield('modal')

    <script src="{{asset('https://kit.fontawesome.com/6d7fabf956.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>