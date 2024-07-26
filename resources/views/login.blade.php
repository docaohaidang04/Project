@extends('layout')
@section('title','T1Shop | Đăng nhập')
@section('title2','Welcome to T1Shop')
@section('content')
<div id="wrapper">
    <div class="container col-md-6 p-3 my-3">
        <div class="row justify-content-center">
            <div class="form-container bg-light p-3 my-3 needs-validation justify-content-center">
                <form action="" class="">
                    <h3 class="text-center text-uppercase py-3">Đăng nhập</h3>
                    <!-- <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="emailInput" placeholder="Email" required>
                                <label for="emailInput">Tài khoản Email</label>
                                <div class="valid-feedback">Email hợp lệ!</div>
                                <div class="invalid-feedback">Email không hợp lệ!</div>
                            </div>
                        </div> -->
                    <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="emailInput" placeholder="Email" required>
                                <label for="emailInput">Tài khoản Email</label>
                                <div class="valid-feedback">Email hợp lệ!</div>
                                <div class="invalid-feedback">Email không hợp lệ!</div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="passwordInput" placeholder="Password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
                                <label for="passwordInput">Mật khẩu</label>
                                <div class="invalid-feedback">Password phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ
                                    thường, số và ký tự đặc
                                    biệt!</div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for=""><a style="text-decoration: none;" href="register.html">Quên mật
                                    khẩu</a></label>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">Chưa có tài khoản? <a style="text-decoration: none;" href="/register">Đăng
                                    ký ngay
                                    !</a></label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="submit" class="btn btn-primary" id="floatingInput" value="Đăng nhập">
                            </div>
                        </div>
                    </div>
                </form>
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

@endsection