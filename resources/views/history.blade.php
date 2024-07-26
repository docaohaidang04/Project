@extends('layout')
@section('title','T1Shop | Lịch sử mua hàng')
@section('title2','Welcome to T1Shop')
@section('content')
<div class="spacer" style="height: 80px;"></div>
<div class="container">
</div>

<div class="container">
    <input type="text" class="form-control" ng-model="keyword" placeholder="Tìm kiếm sản phẩm" ng-model-options="{debounce: 2000}">
    <br>
    <div class="row">
        @foreach($hty as $index => $cart )
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">{{ $index + 1 }}</td>
                    <td class="center-text">{{ $cart -> id }}</td>
                    <td>{{$cart -> created_at}}</td>
                    <td>{{ $cart -> total_amount }}</td>
                    <td>
                        @if($cart->status == 0)
                        Đang chuẩn bị hàng <i class="fas fa-circle"></i>
                        @elseif($cart->status == 1)
                        Đang giao hàng <i class="fas fa-truck"></i>
                        @elseif($cart->status == 2)
                        Đã giao <i class="fas fa-check-circle"></i>
                        @elseif($cart->status == 3)
                        Đã hủy <i class="fas fa-times-circle"></i>
                        @else
                        Trạng thái không xác định
                        @endif
                    </td>
                    <td><button class="btn btn-outline-secondary">
                            <a href="{{ route('history_detail',  $cart->id)}}" class="text-decoration-none text-dark">Xem</a>
                        </button></td>
                </tr>
            </tbody>
        </table>
        @endforeach
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