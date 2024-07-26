@extends('layout')
@section('title','T1Shop | Lịch sử mua hàng')
@section('title2','Welcome to T1Shop')
@section('content')
<div class="spacer" style="height: 80px;"></div>
<div class="container">
</div>

<div class="container">
    <input type="text" class="form-control" ng-model="keyword" placeholder="Tìm kiếm sản phẩm"
        ng-model-options="{debounce: 2000}">
    <br>
    <div class="row">
        @foreach($Items as $index => $Item )
        <table class="table">
            <thead>
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
                <tr>
                    <th scope="row">{{ $index +1}}</th>
                    <td> {{$Item -> name}}</td>
                    <td>
                        <img src=" {{asset($Item ->image)}}" alt="" style="width: 100px" />
                    </td>
                    <td> {{ number_format($Item -> price, 0, ',', '.') }}đ</td>
                    <td> {{$Item -> quantity}}</td>
                    <td> {{ number_format($Item -> total, 0, ',', '.') }}đ</td>
                </tr>

            </tbody>
        </table>
        @endforeach
        <button class="col-2 btn btn-dark">Quay lại</button>
    </div>
</div>
<div class="spacer" style="height: 90px;"></div>
@endsection