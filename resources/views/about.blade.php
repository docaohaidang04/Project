@extends('layout')
@section('title','T1Shop | Trang tin tức')
@section('title2','Welcome to T1Shop')
@section('content')
<div class="spacer" style="height: 60px;"></div>
<div class="container">
    <div class="row">
        <h2 class="text-center">TIN TỨC VỀ QUẦN ÁO</h2>
        <div class="col-12">
            <div class="card mb-3 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/hinh3.jpg" class="img-fluid rounded-start" alt="Tin tức 1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Xu hướng thời trang mùa hè 2024</h5>
                            <p class="card-text">Mùa hè 2024 đã đến, hãy cùng khám phá những xu hướng thời trang mới
                                nhất...</p>
                            <p class="card-text"><small class="text-muted">Ngày đăng: 15/05/2024</small></p>
                            <a href="newsdetail.html" class="btn btn-dark">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mb-3 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/voucher.png" class="img-fluid rounded-start" alt="Tin tức 3"
                            style="width: 300px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Bí quyết chọn quần áo phù hợp với dáng người</h5>
                            <p class="card-text">Việc chọn quần áo phù hợp với dáng người là điều quan trọng để tôn lên
                                vẻ đẹp...</p>
                            <p class="card-text"><small class="text-muted">Ngày đăng: 10/05/2024</small></p>
                            <a href="newsdetail.html" class="btn btn-dark">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mb-3 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/voucher.png" class="img-fluid rounded-start" alt="Tin tức 3"
                            style="width: 300px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Các thương hiệu thời trang nổi bật năm 2024</h5>
                            <p class="card-text">Năm 2024 chứng kiến sự bùng nổ của nhiều thương hiệu thời trang nổi
                                bật...</p>
                            <p class="card-text"><small class="text-muted">Ngày đăng: 05/05/2024</small></p>
                            <a href="newsdetail.html" class="btn btn-dark">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
@endsection