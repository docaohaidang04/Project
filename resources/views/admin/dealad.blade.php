@extends('admin.layoutad')
@section('title','T1Shop | Quản Trị')
@section('title2','Welcome to T1Shop')
@section('banner')
@section('content')
<div class="col-md-9 p-0">
    <div class="bg-primary-subtle p-3"><i class="fa-solid fa-bars"></i></div>
    <h2 class="p-2">ĐƠN HÀNG</h2>
    <form action="{{ route('searchad') }}" method="GET">
        <input type="text" class="form-control" name="keyword" value="{{ request()->input('keyword') }}"
            placeholder="Tìm kiếm">
    </form>

    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        @foreach($hty as $index => $cart )
        <tbody>

            <tr>
                <td scope="row">{{ $index + 1 }}</td>
                <td class="center-text">{{ $cart -> id }}</td>
                <td>{{$cart -> created_at}}</td>
                <td>{{ $cart -> total_amount }}</td>
                <td>
                    <form id="orderStatusForm" action="{{ route('update_order_status', $cart->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select id="statusSelect" name="status" class="form-select status-dropdown text-center w-75"
                            onchange="this.form.submit()">
                            <option value="0" {{ $cart->status == '0' ? 'selected' : '' }}>Đang chuẩn bị hàng </option>
                            <option value="1" {{ $cart->status == '1' ? 'selected' : '' }}>Đang giao hàng </option>
                            <option value="2" {{ $cart->status == '2' ? 'selected' : '' }}>Đã giao hàng </option>
                            <option value="3" {{ $cart->status == '3' ? 'selected' : '' }}>Đã hủy đơn hàng </option>
                        </select>
                    </form>
                    <script>
                    function handleStatusChange(selectElement) {
                        const selectedValue = selectElement.value;

                        // Clear any existing timeout to avoid multiple timers running
                        clearTimeout(window.disableTimer);

                        if (selectedValue === '2' || selectedValue === '3') {
                            window.disableTimer = setTimeout(function() {
                                selectElement.disabled = true;
                            }, 60000); // 60000 milliseconds = 1 minute
                        }
                    }
                    </script>
                </td>
                <td><button class="btn btn-outline-secondary">
                        <a href="{{ route('history_detail_ad',  $cart->id)}}"
                            class="text-decoration-none text-dark">Xem</a>
                    </button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection