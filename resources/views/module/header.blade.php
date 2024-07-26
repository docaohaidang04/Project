<?php
$cart = session()->get('cart', []);
$totalQuantity = 0;
foreach ($cart as $item) {
    $totalQuantity += $item['quantity'];
}
?>
<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('img/logo.jpg')}}" alt="Your Logo" class="img-fluid" style="width: 100px; height: auto;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center text-lg" id="navbarNav">
            <ul class="navbar-nav text-lg">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/">Trang chủ <span class="sr-only"></span></a>
                </li>
                <li class="">
                    <a class="nav-link  text-white" href="/product" role="button" aria-expanded="false">
                        Sản phẩm
                    </a>
                </li>
                <li class=" nav-item active">
                    <a class="nav-link text-white" href="/about">Tin tức <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/contact">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 custom-ul text-lg">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @auth
                @if(Auth::user()->img)
                <img src="{{ asset('img/' . Auth::user()->img) }}" alt="User Image" class="rounded-circle" height="30" width="30">
                @else
                <i class="fa-solid fa-user"></i>
                @endif
                {{ Auth::user()->name }}
                @else
                <i class="fa-solid fa-user"></i>
                @endauth
            </a>
            <ul class="dropdown-menu">
                @guest
                <!-- Login and Register links for guests -->
                <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
                <li><a class="dropdown-item" href="{{ route('password.request') }}">Quên mật khẩu</a></li>
                <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký thành viên</a></li>
                @endguest
                @auth
                <!-- Logout link for authenticated users -->

                <!-- Other authenticated user links -->
                <li><a class="dropdown-item" href="/history">Lịch sử</a></ li>
                <li><a class="dropdown-item" href="/liked">Sản phẩm yêu thích</a></li>
                <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                <li><a class="dropdown-item" href="/inf">Cập nhật hồ sơ</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Đăng xuất</button>
                    </form>
                </li>
                @endauth
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="/cart" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="position-absolute bottom-25 start-75 translate-middle badge rounded-pill bg-danger">
                    {{ $totalQuantity }}
                </span>
            </a>
            <!-- <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="">Đơn hàng</a></li>
                <li><a class="dropdown-item" href="#">Hàng đã mua</a></li>
            </ul> -->
        </li>
    </ul>

</nav>