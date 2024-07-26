@extends('admin.layoutad')
@section('title', 'T1Shop | Quản Trị')
@section('title2', 'Welcome to T1Shop')

@section('content')
<style>
    /* Định dạng tiêu đề */
    h2 {
        color: #333;
        /* Màu chữ */
        font-size: 24px;
        /* Kích thước chữ */
    }

    /* Định dạng tiêu đề phụ */
    h3 {
        color: #007bff;
        /* Màu chữ */
        font-size: 20px;
        /* Kích thước chữ */
    }

    /* Định dạng bảng */
    .table {
        width: 100%;
        /* Chiều rộng bảng */
        margin-bottom: 1rem;
        /* Khoảng cách dưới */
        color: #333;
        /* Màu chữ */
    }

    /* Định dạng các dòng trong bảng */
    .table th,
    .table td {
        padding: 0.75rem;
        /* Khoảng cách giữa nội dung và biên */
        vertical-align: top;
        /* Căn chỉnh nội dung */
        border-top: 1px solid #dee2e6;
        /* Viền trên */
    }

    /* Định dạng đường kẻ giữa các ô */
    .table th {
        border-bottom: 2px solid #dee2e6;
        /* Viền dưới */
    }

    /* Định dạng tiêu đề cột */
    .table thead th {
        vertical-align: bottom;
        /* Căn chỉnh nội dung */
        border-bottom: 2px solid #dee2e6;
        /* Viền dưới */
    }

    /* Định dạng ảnh */
    .img-fluid {
        max-width: 100%;
        /* Chiều rộng tối đa */
        height: auto;
        /* Chiều cao tự động */
        border-radius: 0.25rem;
        /* Bo góc */
    }

    /* Định dạng phần nội dung chính */
    .bg-white {
        background-color: #fff;
        /* Màu nền */
    }

    .shadow-sm {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Hiệu ứng bóng */
    }

    .rounded {
        border-radius: 0.25rem;
        /* Bo góc */
    }
</style>
<div class="col-md-9 p-0">
    <div class="bg-primary-subtle p-3 d-flex justify-content-between align-items-center">
        <i class="fa-solid fa-bars"></i>
        <form action="{{ route('searchad') }}" method="GET" class="form-inline">
            <input type="text" class="form-control mr-2" name="keyword" value="{{ request()->input('keyword') }}" placeholder="Tìm kiếm">
            <button class="btn btn-outline-success" type="submit">Tìm</button>
        </form>
    </div>

    <div class="bg-white shadow-sm rounded mt-4 p-4">
        <h2 class="pb-2 border-bottom">CHI TIẾT ĐƠN HÀNG</h2>
        <div class="customer-info pt-3">
            <h3 class="text-primary">Thông tin khách hàng</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Thời gian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_email }}</td>
                            <td>{{ $order->customer_phone }}</td>
                            <td>{{ $order->customer_address }}</td>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="order-info pt-4">
            <h3 class="text-primary">Thông tin đơn hàng</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Items as $index => $Item)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $Item->name }}</td>
                            <td>
                                <img src="{{ asset($Item->image) }}" alt="{{ $Item->name }}" class="img-fluid rounded" style="width: 100px;">
                            </td>
                            <td>{{ number_format($Item->price, 0, ',', '.') }}đ</td>
                            <td>{{ $Item->quantity }}</td>
                            <td>{{ number_format($Item->total, 0, ',', '.') }}đ</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection