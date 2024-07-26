@extends('layout')
@section('title','T1Shop | Trang liên hệ')
@section('title2','Welcome to T1Shop')
@section('content')
<div class="container">
    <div class="row">
        <h2 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h2>
        <div class="col-6">
            <div class="card border-0" style="width: auto">
                <div class="card-body">
                    <h5 class="card-title">Công ty HD</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <p><i class="fa-solid fa-location-dot"></i> Địa chỉ: 123123</p>
                    </h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <p><i class="fa-solid fa-phone"></i> Số điện thoại: 0338815149</p>
                    </h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <p><i class="fa-solid fa-envelope"></i> Email: haidangdeptrai@gmail.com</p>
                    </h6>
                    <hr>
                    <h5>Liên hệ với chúng tôi</h5>
                    <form>
                        <div class="mb-6">
                            <label for="exampleInputFullName" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="exampleInputFullName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-6">
                            <label for="exampleInputEmail" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="exampleInputEmail"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-6">
                            <label for="exampleInputPhone" class="form-label">Số điện thoại*</label>
                            <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-6">
                            <label for="exampleInputContent" class="form-label" style="display: block;">Nhập nội
                                dung*</label>
                            <textarea id="exampleInputContent" name="content" class="form-control" cols="79"
                                rows="5"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn col-12 btn-dark p-2  btn-lg">Gửi liên hệ của bạn</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4646379662095!2d106.62438847451818!3d10.852221257792174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b161f50ae47%3A0x2328d1d1acc3b11a!2sFPT%20Polytechnic%20TP.HCM%20-%20T%C3%B2a%20F!5e0!3m2!1svi!2s!4v1710445271127!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>

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