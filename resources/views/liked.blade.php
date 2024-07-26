@extends('layout')
@section('title','T1Shop | Lịch sử mua hàng')
@section('title2','Welcome to T1Shop')
@section('content')
<div class="spacer" style="height: 80px;"></div>
<div class="container">
</div>

<div class="container">
    <h2 class="text-center">SẢN PHẨM YÊU THÍCH</h2>
    <input type="text" class="form-control" ng-model="keyword" placeholder="Tìm kiếm sản phẩm" ng-model-options="{debounce: 2000}">
    <br>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="img/hinh2.jpg" alt="" class="img-fluid" style="width: 170px;">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-text">Áo Nam Nữ ai mặc cũng đẹp tại vì áo này có 4 cup World</h5>
                            <h5 class="card-text text-dark-emphasis">Phân loại: BLACK</h5>
                            <h5 class="card-text text-danger">180.000đ</h5>
                        </div>
                    </div>



                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="text-end">
                        <button type="button" class="btn btn-danger">Xem chi tiết</button>
                        <button type="button" class="btn btn-outline-dark">Mua Ngay</button>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="img/hinh2.jpg" alt="" class="img-fluid" style="width: 170px;">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-text">Áo Nam Nữ ai mặc cũng đẹp tại vì áo này có 4 cup World</h5>
                            <h5 class="card-text text-dark-emphasis">Phân loại: BLACK</h5>
                            <h5 class="card-text text-danger">180.000đ</h5>
                        </div>
                    </div>



                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="text-end">
                        <button type="button" class="btn btn-danger">Xem chi tiết</button>
                        <button type="button" class="btn btn-outline-dark">Mua Ngay</button>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<div class="spacer" style="height: 90px;"></div>

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

@endsection