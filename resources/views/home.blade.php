@extends('layout')
@section('title','HD Shop | Thời trang nam')
@section('title2','Welcome to T1Shop')
@section('banner')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="img/banner1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="img/banner2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="img/banner3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
@section('nav')
<nav class="row  p-3 d-flex justify-content-center">
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
</nav>


<nav class="row  p-3 d-flex justify-content-center">
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
</nav>

<nav class="row  p-3 d-flex justify-content-center">
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
</nav>
@endsection
@section('content')
<!-- sản phẩm -->

<div class="row m-0">
    @if (isset($error))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
    @endif

    <article class="col-sm-12 p-5 m-0 text-center">
        <div class="text-start" style="font-size: 30px;">
            BÁN CHẠY NHẤT <i class="fa-solid fa-fire fa-beat" style="color: #f0690f; font-size: 34px;"></i>
        </div>
        <div class="text-end">
            <a class="all" style="text-decoration: none; color: black;" href="">Xem tất cả</a>
        </div>

        <div class="row pb-md-1">
            @foreach ($productNew as $product)
            <div class="col-sm-3 poly-prod my-4">
                <a href="{{ route('productdetail', ['id' => $product['id']]) }}" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            @if ($product['img'])
                            <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="product-img mb-3" style="width: 100px;height: 100px;">
                            @endif
                            <h5 class="card-title text-center">{{ $product['name'] }}</h5>
                        </div>
                        <div class="card-footer border-top-0 bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0 text-primary fw-bold">${{ $product['price'] }}</p>
                                <p class="mb-0">
                                    <del class="text-muted">350.000₫</del> <span class="text-danger">-18%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </article>


    <article class="col-sm-12  p-5 m-0 text-center m-0">
        <div class="text-start" style="font-size: 30px;">SẮP CHÁY HÀNG <i class="fa-solid fa-fire fa-beat" style="color: #f0690f; font-size: 34px;"></i></div>
        <div class="text-end">
            <a class="all" style="text-decoration: none;" href="#" id="countdown"></a>
        </div>

        <script>
            // Tính toán thời gian kết thúc sau 4 tiếng
            var countDownDate = new Date();
            countDownDate.setHours(countDownDate.getHours() + 4);

            // Cập nhật bộ đếm mỗi giây
            var x = setInterval(function() {

                // Lấy ngày và giờ hiện tại
                var now = new Date().getTime();

                // Tính toán khoảng cách giữa ngày hiện tại và ngày kết thúc
                var distance = countDownDate - now;

                // Nếu thời gian kết thúc, dừng bộ đếm
                if (distance <= 0) {
                    clearInterval(x);
                    document.getElementById("countdown").innerHTML = "Kết thúc";
                } else {
                    // Tính toán thời gian còn lại
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Hiển thị thời gian còn lại
                    document.getElementById("countdown").innerHTML = "Kết thúc sau " + hours + " Giờ " +
                        minutes + " phút " + seconds + " giây ";
                }
            }, 1000);
        </script>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Sản phẩm nổi
                    bật</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bán chạy nhất
                    tháng</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="d-flex flex-wrap">
                    @foreach($productBest as $product)
                    <div class="poly-prod m-3" style="width: 30%;">
                        <div class="card border-0">
                            <div class="card-body">
                                @if ($product->img)
                                <img src="{{ $product->img }}" alt="{{ $product->name }}" style="width: 100px;height: 100px;">
                                @endif
                            </div>
                            <div class="card-footer border-top-0">
                                {{ $product->price }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="poly-prod my-3" style="width: 30%;">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="img/hinh2.jpg" alt="">
                        </div>
                        <div class="card-footer border-top-0">
                            100.000 VNĐ
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-md-1">


        </div>
    </article>
    <article class="col-sm-12  p-5 m-0 text-center m-0">
        <div class="text-start" style="font-size: 30px;">GIẢM GIÁ SỐC <i class="fa-solid fa-fire fa-beat" style="color: #f0690f; font-size: 34px;"></i></div>
        <div class="text-end"><a class="all" style="text-decoration: none; color: black;" href="">Xem tất cả</a>
        </div>
        <div class="row pb-md-1">
            <div class="col-sm-4 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="">
                    </div>
                    <div class="card-footer border-top-0">
                        100.000 VNĐ
                    </div>
                </div>
            </div>
            <div class="col-sm-4 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="">
                    </div>
                    <div class="card-footer border-top-0">
                        100.000 VNĐ
                    </div>
                </div>
            </div>
            <div class="col-sm-4 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="">
                    </div>
                    <div class="card-footer border-top-0">
                        100.000 VNĐ
                    </div>
                </div>
            </div>

        </div>
    </article>

    <div class="banner2"><img src="img/banner2.jpg" style="width: 80%; text-align: center;" alt=""></div>

    <article class="col-sm-12  p-5 m-0 text-center m-0">
        <div class="text-center" style="font-size: 30px;">PHỤ KIỆN ĐI KÈM</div>
        <div class="row pb-md-1">
            <div class="col-sm-4 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="">
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="row">
                            <div class="col-8">
                                <a href="" style="text-decoration: none; color: black;">
                                    <p>Áo croptop </p>
                                </a>
                            </div>
                            <div class="col-4 text-end">
                                <p class="mb-1">290.000₫</p>
                                <p class="mb-0"><del>350.000₫</del style="color: red"> -18%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="">
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="row">
                            <div class="col-8">
                                <a href="" style="text-decoration: none; color: black;">
                                    <p>Áo croptop </p>
                                </a>
                            </div>
                            <div class="col-4 text-end">
                                <p class="mb-1">290.000₫</p>
                                <p class="mb-0"><del>350.000₫</del> -18%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="">
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="row">
                            <div class="col-8">
                                <a href="" style="text-decoration: none; color: black;">
                                    <p>Áo croptop </p>
                                </a>
                            </div>
                            <div class="col-4 text-end">
                                <p class="mb-1">290.000₫</p>
                                <p class="mb-0"><del>350.000₫</del> -18%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </article>

</div>

<!-- tin tuc -->
<nav class="row  p-3 d-flex justify-content-center">
    <h2 class="text-center">TIN TỨC NỔI BẬT</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- Thẻ voucher -->
                            <div class="voucher">
                                <h3 class="mb-4">Thần tượng Thời Trang</h3>
                                <p class="lead">Đối với những người yêu thích thời trang, đường phố luôn là nguồn
                                    cảm hứng không ngừng. Một số người mẫu nổi tiếng đã
                                    nắm bắt xu hướng này một cách xuất sắc và tạo ra những bộ trang phục đậm chất
                                    streetwear. Từ áo hoodie oversized đến
                                    quần jeans ripped, họ biến các phong cách đường phố thành những tuyên ngôn thời
                                    trang độc đáo !</p>
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
                            <!-- Thẻ voucher -->
                            <div class="voucher">
                                <h3 class="mb-4">Phong Cách Đường Phố</h3>
                                <p class="lead">Đối với những người yêu thích thời trang, đường phố luôn là nguồn
                                    cảm hứng không ngừng. Một số người mẫu nổi tiếng đã
                                    nắm bắt xu hướng này một cách xuất sắc và tạo ra những bộ trang phục đậm chất
                                    streetwear. Từ áo hoodie oversized đến
                                    quần jeans ripped, họ biến các phong cách đường phố thành những tuyên ngôn thời
                                    trang độc đáo !</p>
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
                            <!-- Thẻ voucher -->
                            <div class="voucher">
                                <h3 class="mb-4">Trang Phục Mỗi Ngày</h3>
                                <p class="lead">Đối với những người yêu thích thời trang, đường phố luôn là nguồn
                                    cảm hứng không ngừng. Một số người mẫu nổi tiếng đã
                                    nắm bắt xu hướng này một cách xuất sắc và tạo ra những bộ trang phục đậm chất
                                    streetwear. Từ áo hoodie oversized đến
                                    quần jeans ripped, họ biến các phong cách đường phố thành những tuyên ngôn thời
                                    trang độc đáo !</p>
                                <button type="button" class="btn btn-primary">Mua sắm ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>

<!-- ve chung toi -->
<div class="container p-5">
    <div class="row">
        <!-- Hình ảnh bên trái -->
        <div class="col-md-4">
            <img src="img/logo.jpg" class="img-fluid" alt="Hình ảnh" style="width: 400px;">
        </div>
        <!-- Văn bản bên phải -->
        <div class="col-md-8">
            <h2>VỀ CHÚNG TÔI</h2>
            <p>
                HD SHOP là một thương hiệu thời trang thể thao chuyên nghiệp, mang đến cho khách hàng những sản phẩm
                thiết kế
                tinh tế và chất lượng cao. Với sự tập trung vào việc sáng tạo và đổi mới, HD SHOP luôn cố gắng mang
                đến những sản
                phẩm mới nhất và đáp ứng nhu cầu của khách hàng với phong cách thời trang thể thao hiện đại và tiện
                dụng. Những chi tiết
                nhỏ như đường may tinh tế và chất liệu thoáng khí giúp sản phẩm của HD SHOP mang đến sự thoải mái và
                độ bền tốt
                nhất cho khách hàng. Với cam kết mang đến sự hài lòng cho khách hàng, HD SHOP đã trở thành một trong
                những thương
                hiệu thời trang thể thao được ưa chuộng và tin dùng trên thị trường.
            </p>
        </div>
    </div>
</div>

<!-- danh gia -->
<nav class="row  p-3 d-flex justify-content-center">
    <h2 class="text-center">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- Thẻ voucher -->
                            <div class="voucher">
                                <img src="img/khachhang1.jpg" alt="Voucher Image">
                                <h3 class="mb-4">LÊ THỊ THUÝ VI</h3>
                                <p class="lead">Sản phẩm tốt, chủ shop đẹp trai !</p>
                                <div class="stars"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- Thẻ voucher -->
                            <div class="voucher">
                                <img src="img/khachhang2.jpg" alt="Voucher Image">
                                <h3 class="mb-4">NGUYỄN KIM ĐẠT</h3>
                                <p class="lead">Sản phẩm đẹp, mặc rất hợp!</p>
                                <div class="stars"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- Thẻ voucher -->
                            <div class="voucher">
                                <img src="img/khachhang3.jpg" alt="Voucher Image">
                                <h3 class="mb-4">DƯƠNG CHÍ THẨM</h3>
                                <p class="lead">Đồ đẹp, nhưng đẹp hơn khi được mặc cặp với em !</p>
                                <div class="stars"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.querySelectorAll(".stars").forEach(function(starsContainer) {
            // Duyệt qua 5 lần để thêm 5 sao vào mỗi starsContainer
            for (var i = 0; i < 5; i++) {
                var starIcon = document.createElement("i");
                starIcon.classList.add("fa-solid", "fa-star");
                starIcon.style.color = "#FFD43B";
                starsContainer.appendChild(starIcon);
            }
        });
        $(document).ready(function() {
            $('.nav-item.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });

            $('.nav-item.dropdown > .nav-link').click(function() {
                window.location.href = $(this).attr('href');
            });
        });
    </script>
</nav>

@endsection

@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="img/modal.jpg" style="width: 465px;" alt="">

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#exampleModal').modal('show');
    });
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
@endsection