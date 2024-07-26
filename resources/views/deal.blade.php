@extends('layout') @section('title','T1Shop | Thanh toán') @section('title2','Chào mừng đến với T1Shop')
@section('content') <div class="spacer" style="height: 60px;"></div>
<div class="container">
    <div class="row">
        <!-- Bảng các mặt hàng trong giỏ hàng -->
        <div class="col-md-6">
            <h4>Thanh toán</h4>
            @auth
            @php
            $user = Auth::user();
            @endphp
            @endauth
            <form action="{{ route('infocus') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="exampleInputName" name="customer_name"
                        aria-describedby="nameHelp" required value="{{ auth()->check() ? $user->name : '' }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="customer_email"
                        aria-describedby="emailHelp" required value="{{ auth()->check() ? $user->email : '' }}">
                    <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất
                        kỳ ai
                        khác.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Số điện thoại</label>
                    <input type="tel" class="form-control" id="exampleInputPhone" name="customer_phone"
                        value="{{ auth()->check() ? $user->phone : '' }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAddress" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="customer_address" required
                        value="{{ auth()->check() ? $user->address : '' }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputNote" class="form-label">Ghi chú</label>
                    <textarea class="form-control" id="exampleInputNote" name="customer_note" rows="3"></textarea>
                </div>
                <div class="accordion row g-2" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Thông tin người nhận khác
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row g-2">
                                    <label for="receiver_name" class="fw-bold">Họ và tên người nhận: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" placeholder="Họ và tên" name="receiver_name"
                                        class="form-control" />
                                </div>

                                <div class="row g-2">
                                    <label for="receiver_address" class="fw-bold">Địa chỉ người nhận: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" placeholder="Địa chỉ" name="receiver_address"
                                        class="form-control" />
                                </div>

                                <div class="row g-2">
                                    <label for="receiver_phone" class="fw-bold">Số điện thoại người nhận: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" placeholder="Số điện thoại" name="receiver_phone"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
        <div class="col-md-6">
            <div class="col-md-3 bg-light align-self-start">
                <div class="card border-0 bg-light" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-danger"></h5>
                        <div class="row">
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="d-flex justify-content-between">

                                    <p class="text-start m-0">Thời gian dự kiến: </p>
                                    <p class="text-end m-0">3 -4 ngày</p>
                                </div>
                                <div class="d-flex justify-content-between">

                                    <p class="text-start m-0">Tổng cộng: </p>
                                    <p class="text-end m-0">{{ $totalAmount }}$</p>
                                </div>
                                <p class="text-light-emphasis text-end m-0" style="font-size: 14px;">(Đã bao gồm VAT nếu
                                    có)
                                </p>

                            </div>
                        </div>
                        <p class="card-text text-danger"><i class="fa-solid fa-exclamation" style="color: #ff0000;"></i>
                            Đơn
                            hàng của bạn chưa đạt 500.000đ để áp mã giảm giá !</p>

                        <div class="p-1 border border-dark border-start-0 border-end-0">
                            <div class="d-flex justify-content-between">
                                <p class="text-start m-0">Mã giảm giá </p>
                                <a href="" class="text-decoration-none">
                                    <p class="text-end m-0">chọn mã giảm giá</p>
                                </a>
                            </div>
                        </div>
                        <div class="container">
                            <a class="text-decoration-none" href="/deal">
                                <div class="row text-decoration-none">
                                    <button type="submit" class="btn btn-dark btn-lg btn-block mt-2">Thanh toán</button>
                                </div>
                            </a>

                            <br>
                            <div class="row">
                                <div class="col-3">
                                    <a href=""><img src="img/momo.png" alt="" style="width: 50px;"></a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="img/visa.png" alt="" style="width: 50px;"></i></a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="img/zalopay.webp" alt="" style="width: 50px;"></a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="img/vnpay.jpg" alt="" style="width: 50px;"></a>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
                <br>
                <a href="/cart" class="btn btn-dark ">Quay lại giỏ hàng</a>

            </div>
        </div>
        </form>
    </div>
</div>
</div> <!-- Form thông tin khách hàng -->
@endsection <script>
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