@extends('layout')
@section('title','T1Shop | Thời trang nam')
@section('title2','Welcome to T1Shop')
@section('content')
<div class="spacer" style="height: 100px;"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-1">
            <div class="row">
                <div class="col-sm-12 mb-2">
                    <img src="img/logo.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-sm-12 mb-2">
                    <img src="img/logo.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-sm-12 mb-2">
                    <img src="img/logo.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-sm-12 mb-2">
                    <img src="img/logo.jpg" class="img-thumbnail" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">

            <img src="{{asset($allProducts->img) }}" alt="{{ $allProducts->name }}" style="height: 320px;">

            <div class="mt-2 form-control-lg">Chia sẻ:
                <a href=""><i class="fa-brands fa-facebook" style="color: #0c27ed;"></i></a>
                <a href=""><i class="fa-brands fa-instagram" style="color: #ff007b;"></i></a>
                <a href=""><i class="fa-brands fa-twitter" style="color: #0008ff;"></i></a>
            </div>
        </div>


        <ul class="col-sm-3 p-4">
            <h1>{{$allProducts->name}}</h1>
            <p>Thương hiệu: EGA Mã sản phẩm: Đang cập nhật</p>
            <div class="card-header bg-danger-subtle text-start" id="countdownTimer">
                Kết thúc sau: <span id="countdown">60:00</span>
            </div>


            <h3 class="mb-0">{{$allProducts->price}} <del class="text-light-emphasis"> 350.000₫</del></h3>

            <br>
            <div class="col-md-12">
                <p class="mb-3"><i class="fa-solid fa-gift"></i> KHUYẾN MÃI - ƯU ĐÃI</p>
                <ul class="list-group list-group-flush custom-list">
                    <li class="list-group-item list-group-item-action">
                        <span class="dot"></span><span><i class="fa-solid fa-fire"></i> Nhập mã <strong>EGANY</strong>
                            thêm 5% đơn hàng</span>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <span class="dot"></span><span><i class="fa-solid fa-fire"></i> Hỗ trợ <strong>10.000</strong>
                            phí Ship cho đơn hàng từ
                            <strong>200.000₫</strong></span>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <span class="dot"></span><span><i class="fa-solid fa-fire"></i> Miễn phí Ship cho đơn hàng từ
                            <strong>300.000₫</strong></span>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <span class="dot"></span><span><i class="fa-solid fa-fire"></i> Đổi trả trong <strong>30
                                ngày</strong> nếu sản phẩm lỗi bất
                            kì</span>
                    </li>
                </ul>
            </div>
            <br>

        </ul>
        <div class="col-sm-4 p-4">
            <div class="row">
                <div class="mb-3">
                    <label for="sizeSelector" class="form-label">Chọn kích thước:</label>
                    <button type="button" class="btn text-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hướng dẫn chọn size
                    </button>
                    <div id="sizeSelector" class="btn-group" role="group" aria-label="Kích thước">
                        <button type="button" class="btn btn-outline-primary mr-2" onclick="selectSize('S')">S</button>
                        <button type="button" class="btn btn-outline-primary mr-2" onclick="selectSize('M')">M</button>
                        <button type="button" class="btn btn-outline-primary mr-2"
                            onclick="selectSize('XL')">XL</button>
                        <button type="button" class="btn btn-outline-primary" onclick="selectSize('XXL')">XXL</button>
                    </div>
                </div>
                <p>Mã giảm giá</p>
                <p class="d-inline-flex gap-1">
                    <a class="btn voucher-btn" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                        aria-expanded="false" aria-controls="multiCollapseExample1">FREESHIP</a>
                    <button class="btn voucher-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample2" aria-expanded="false"
                        aria-controls="multiCollapseExample2">GIAM50K</button>
                    <button class="btn voucher-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target=".multi-collapse" aria-expanded="false"
                        aria-controls="multiCollapseExample1 multiCollapseExample2">GIAM40K</button>
                </p>
                <!-- <div class="col-4 mb-3">
                    <input type="number" class="form-control form-control-lg border-primary text-center" value="1">
                </div> -->
                <div class="col-8 mb-3">
                    <input type="number" id="quantityInput"
                        class="form-control form-control-lg border-primary text-center" name="quantity" value="1">
                    <br>
                    <form id="addToCartForm" action="{{ route('cart.addcart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $allProducts->id }}">
                        <input type="hidden" name="img" value="{{ $allProducts->img }}">
                        <input type="hidden" id="quantityInputCart" name="quantity">
                        <button type="submit" id="addToCartBtn" class="btn btn-secondary btn-lg ">Thêm vào giỏ
                            hàng</button>
                    </form>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <form id="buyNowForm" action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $allProducts->id }}">
                            <input type="hidden" name="img" value="{{ $allProducts->img }}">
                            <input type="hidden" id="quantityInputBuy" name="quantity">
                            <button type="submit" class="btn btn-secondary btn-lg w-100">Mua ngay</button>
                        </form>
                    </div>
                </div>

                <script>
                document.getElementById('addToCartForm').addEventListener('submit', function() {
                    document.getElementById('quantityInputCart').value = document.getElementById(
                        'quantityInput').value;
                });

                document.getElementById('buyNowForm').addEventListener('submit', function() {
                    document.getElementById('quantityInputBuy').value = document.getElementById('quantityInput')
                        .value;
                });
                </script>
                <div class="row">
                    <div class="col-12 text-center mb-0">Gọi đặt hàng toàn quốc: 0338815149</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4"><i class="fa-solid fa-truck"></i> Giao hàng toàn quốc</div>
                    <div class="col-4"><i class="fa-solid fa-hand-holding-heart"></i> Tích điểm mỗi sản phẩm</div>
                    <div class="col-4"><i class="fa-solid fa-credit-card"></i> Giảm 5% khi thanh toán online</div>
                </div>
            </div>

        </div>
        <div class="row">

        </div>
    </div>
</div>

<!-- tab -->
<div class="container d-flex justify-content-center align-items-center">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Mô tả sản phẩm</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Chính sách giao
                hàng</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Chính sách đổi
                trả</button>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active p-5" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
        tabindex="0">
        <p>Áo thun nam EGA "Urban Style" là sự kết hợp hoàn hảo giữa phong cách đương đại và sự thoải mái. Thiết kế đơn
            giản nhưng
            không kém phần ấn tượng, áo thun này là sự lựa chọn lý tưởng cho những người đàn ông yêu thích phong cách
            thời trang đô
            thị.</p>
        <li>Chất liệu vải cotton mềm mại và thoáng khí, giúp cảm giác thoải mái suốt cả ngày.</li>
        <li>
            Kiểu dáng slim fit ôm sát cơ thể, tôn lên vóc dáng nam tính và hiện đại.
        </li>
        <li>Màu sắc trẻ trung và phong cách, dễ dàng kết hợp với nhiều loại quần áo khác nhau.</li>
        <p>Áo thun có sẵn trong các kích thước từ S đến XXL, phù hợp với nhiều dáng người khác nhau.</p>
        <p>Hình ảnh sản phẩm chỉ mang tính chất minh họa. Màu sắc và chi tiết sản phẩm thực tế có thể khác nhau.</p>
    </div>
    <div class="tab-pane fade p-5" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <p>Thời gian giao hàng là 1-2 ngày sau khi đặt hàng.</p>
        <p>Đơn hang trước 11h30 trưa thì sẽ giao trong buổi chiều cùng ngày</p>
        <p>Đơn hàng sau 11h30 sẽ giao trong buổi tối và sáng hôm sau.</p>
        <p>Phí ship cố định là 30,000đ áp dụng cho mọi khu vực</p>
    </div>
    <div class="tab-pane fade p-5" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        <p>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</p>
        <p>Không đủ số lượng, không đủ bộ như trong đơn hàng.</p>
        <p>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</p>
    </div>
    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...
    </div>
</div>
<!-- Modal -->
<div class="container">
    <div class="text-center">
        <h2>SẢN PHẨM CÙNG LOẠI</h2>
    </div>
    <article class="col-sm-12  p-5 m-0 text-center m-0">
        <div class="row pb-md-1">
            @foreach ($prolienquan as $product)
            <div class="col-sm-4 poly-prod my-3">

                <a href="{{ route ('productdetail',['id' => $product->id])}}">
                    <div class="card border-0">
                        <div class="card-body">
                            @if ($product->img)
                            <img src="{{ $product->img }}" alt="{{ $product->name }}" style="width: 100px;">
                            @endif
                        </div>
                        <div class="card-footer border-top-0">
                            <div class="row">
                                <div class="col-8">
                                    <a href="" style="text-decoration: none; color: black;">
                                        <p>{{ $product->name }}</p>
                                    </a>
                                </div>
                                <div class="col-4 text-end">
                                    <p class="mb-1">Price: ${{ $product->price }}</p>
                                    <p class="mb-0"><del>350.000₫</del style="color: red"> -18%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

    </article>
</div>
<div class="container">
    <div class="text-start">
        <h3>SẢN PHẨM KHÁC</h3>
    </div>
    <article class="col-sm-12  p-5 m-0 text-center m-0">
        <div class="row pb-md-1">
            <div class="col-sm-3 poly-prod my-3">
                <a href="productdetail.html">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="img/hinh2.jpg" alt="" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="card-footer border-top-0">
                            <div class="row">
                                <div class="col-6">
                                    <a href="" style="text-decoration: none; color: black;">
                                        <p>Áo croptop tập gym yoga</p>
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="mb-1">290.000₫</p>
                                    <p class="mb-0"><del>350.000₫</del style="color: red"> -18%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 poly-prod my-3">
                <a href="productdetail.html">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="img/hinh2.jpg" alt="" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="card-footer border-top-0">
                            <div class="row">
                                <div class="col-6">
                                    <a href="" style="text-decoration: none; color: black;">
                                        <p>Áo croptop tập gym yoga</p>
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="mb-1">290.000₫</p>
                                    <p class="mb-0"><del>350.000₫</del style="color: red"> -18%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="row">
                            <div class="col-6">
                                <a href="" style="text-decoration: none; color: black;">
                                    <p>Áo croptop tập gym yoga</p>
                                </a>
                            </div>
                            <div class="col-6 text-end">
                                <p class="mb-1">290.000₫</p>
                                <p class="mb-0"><del>350.000₫</del> -18%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 poly-prod my-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="img/hinh2.jpg" alt="" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="row">
                            <div class="col-6">
                                <a href="" style="text-decoration: none; color: black;">
                                    <p>Áo croptop tập gym yoga</p>
                                </a>
                            </div>
                            <div class="col-6 text-end">
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hướng dẫn chọn size</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/size.webp" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.form-check-input').change(function() {
        if ($(this).is(':checked')) {
            $('.form-check-input').not(this).prop('checked', false);
        }
    });
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
<script>
// Set the initial countdown time to 60 minutes (3600 seconds)
let timeLeft = 3600;

// Update the countdown timer every second
const timer = setInterval(() => {
    // Decrease the time left by 1 second
    timeLeft--;

    // Calculate the remaining minutes and seconds
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;

    // Format the time with leading zeros if necessary
    const formattedTime = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

    // Display the formatted time in the countdown span
    document.getElementById('countdown').innerText = formattedTime;

    // Stop the timer when time runs out
    if (timeLeft === 0) {
        clearInterval(timer);
        // You can add additional actions here when the countdown finishes
    }
}, 1000); // Update every second (1000 milliseconds)
function selectSize(size) {
    // Xóa border và background color cho tất cả các nút
    document.querySelectorAll('#sizeSelector button').forEach(button => {
        button.classList.remove('selected');
    });

    // Thêm border và background color cho nút đã chọn
    event.currentTarget.classList.add('selected');
}
</script>
@endsection