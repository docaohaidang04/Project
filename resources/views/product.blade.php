@extends('layout')
@section('title','T1Shop | Trang sản phẩm')
@section('title2','Welcome to T1Shop')
@section('content')
<div class="banner2 m-2 mb-4"><img src="img/bannergiamgia.png" style="width: 80%; text-align: center;" alt=""></div>

<nav class="row  p-3 d-flex justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- Thẻ voucher -->
                            <div class="voucher">

                                <p class="lead"><i class="fa-solid fa-truck"></i> <strong>Freeship </strong>cho đơn hàng
                                    từ 500K</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- Thẻ voucher -->
                            <div class="voucher">

                                <p class="lead"><i class="fa-solid fa-truck"></i> <strong>Freeship </strong>cho đơn hàng
                                    từ 500K</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- Thẻ voucher -->
                            <div class="voucher">

                                <p class="lead"><i class="fa-solid fa-truck"></i> <strong>Freeship </strong>cho đơn hàng
                                    từ 500K</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <aside class="col-sm-3 p-0 m-0">
            <div class="card  m-2 w-100 border-0">
                <div class="card-header border-0">
                    <span class=""><i class="fa-solid fa-bars"></i></span>
                    <strong>Loại</strong>
                </div>
                <div class="card-body">

                    <div class="list-group list-group-flush">
                        <div class="form-check">
                            <label class="form-check-label" for="brand2">
                                @foreach($categories as $cate)
                                <a class="dropdown-item" href="{{ route('category.products', $cate->id) }}">
                                    {{ $cate->name }}
                                </a>
                                @endforeach
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-header border-0">
                    <span class="fa fa-th-list"></span>
                    <strong>Thương hiệu</strong>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand1">
                            <label class="form-check-label" for="brand1">
                                UEA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand2">
                            <label class="form-check-label" for="brand2">
                                UEA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand3">
                            <label class="form-check-label" for="brand3">
                                UEA
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-header border-0">
                    <span class="fa fa-paint-brush"></span>
                    <strong>Màu sắc</strong>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="color1" style="display: none;">
                            <label class="form-check-label" for="color1">
                                <div class="color-box" style="background-color: red;"></div>
                                Đỏ
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="color2" style="display: none;">
                            <label class="form-check-label" for="color2">
                                <div class="color-box" style="background-color: green;"></div>
                                Xanh lá
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="color3" style="display: none;">
                            <label class="form-check-label" for="color3">
                                <div class="color-box" style="background-color: blue;"></div>
                                Xanh dương
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-header border-0">
                    <span class=""><i class="fa-solid fa-dollar-sign"></i></span>
                    <strong>Mức giá</strong>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand1">
                            <label class="form-check-label" for="brand1">
                                1.000.000đ - 2.000.000đ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand2">
                            <label class="form-check-label" for="brand2">
                                3.000.000đ - 4.000.000đ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand3">
                            <label class="form-check-label" for="brand3">
                                4.000.000đ - 5.000.000đ
                            </label>
                        </div>
                    </div>
                </div>


                <div class="card-header border-0">
                    <span class=""><i class="fa-solid fa-truck-fast"></i></span>
                    <strong>Dịch vụ giao hàng</strong>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand1">
                            <label class="form-check-label" for="brand1">
                                Giao hàng miễn phí
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand2">
                            <label class="form-check-label" for="brand2">
                                Giao hàng nhanh 4h
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brand3">
                            <label class="form-check-label" for="brand3">
                                Giao hàng tiết kiệm
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </aside>
        <article class="col-sm-9 p-5 m-0 text-center">
            <div class="text-start" style="font-size: 30px;">TẤT CẢ SẢN PHẨM</div>
            <form action="{{ route('search') }}" method="GET">
                <input type="text" class="form-control" name="keyword" value="{{ request()->input('keyword') }}" placeholder="Tìm kiếm sản phẩm">
            </form>
            <br>
            <div class="dropdown text-end">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Sắp xếp
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">A -> Z</a></li>
                    <li><a class="dropdown-item" href="#">Z -> A</a></li>
                    <li><a class="dropdown-item" href="#">Giá tăng dần</a></li>
                    <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
                </ul>
            </div>
            <div class="row pb-md-1">
                @foreach ($allProducts as $product)
                <div class="col-sm-3 poly-prod my-3">
                    <a href="{{ route('productdetail', ['id' => $product->id]) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0">
                                @if ($product->img)
                                <img src="{{ $product->img }}" alt="{{ $product->name }}" style="width: 150px; height: 150px;">
                                @endif
                            </div>
                            <div class="card-footer border-top-0 bg-white">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p class="mb-0 font-weight-bold">{{ $product->name }}</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p class="mb-1 text-primary font-weight-bold">{{ $product->price }}</p>
                                        <p class="mb-0"><del class="text-muted">350.000₫</del> <span class="text-danger">-18%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    @if ($allProducts->previousPageUrl())
                    <li class="page-item">
                        <a class="page-link" href="{{ $allProducts->previousPageUrl() }}" rel="prev">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fa-solid fa-arrow-left"></i></span>
                    </li>
                    @endif

                    @foreach ($allProducts->getUrlRange(1, $allProducts->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $allProducts->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    @if ($allProducts->nextPageUrl())
                    <li class="page-item">
                        <a class="page-link" href="{{ $allProducts->nextPageUrl() }}" rel="next">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fa-solid fa-arrow-right"></i></span>
                    </li>
                    @endif
                </ul>
            </nav>
            <!-- {{ $allProducts->links() }} -->
        </article>

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

@endsection