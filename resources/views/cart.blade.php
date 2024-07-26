@extends('layout')

@section('title', 'T1Shop | Thanh toán')
@section('title2', 'Chào mừng đến với T1Shop')

@section('content')
<div class="spacer" style="height: 60px;"></div>
<div class="container">
    <div class="row">
        <!-- Bảng các mặt hàng trong giỏ hàng -->
        <div class="col-md-9">
            <h4>Giỏ hàng</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $index => $procart)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $procart['name'] }}</td>
                        <td><img src="{{ asset($procart['img']) }}" style="width: 50px;" alt=""></td>
                        <td>{{ $procart['price'] }}</td>
                        <td>{{ $procart['quantity'] }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $index) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xoá</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center">
            </div>
        </div>
        <!-- Form phương thức thanh toán -->
        <div class="col-md-3 bg-light align-self-start">
            <div class="card border-0 bg-light" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-danger"></h5>
                    <div class="row">
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-flex justify-content-between">

                                <p class="text-start m-0">Tổng cộng: </p>
                                <p class="text-end m-0">{{ $totalAmount }}$</p>
                            </div>
                            <p class="text-light-emphasis text-end m-0" style="font-size: 14px;">(Đã bao gồm VAT nếu có)
                            </p>

                        </div>
                    </div>
                    <p class="card-text text-danger"><i class="fa-solid fa-exclamation" style="color: #ff0000;"></i> Đơn
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

        </div>
    </div>
</div>
@endsection
<div class="spacer" style="height: 60px;"></div>