@extends('admin.layoutad')
@section('title','T1Shop | Quản Trị')
@section('title2','Welcome to T1Shop')
@section('banner')
@section('content')
<div class="col-md-9 p-0">
    <div class="bg-primary-subtle p-3"><i class="fa-solid fa-bars"></i></div>
    <h2 class="p-2">Danh mục</h2>

    <div class="row">
        <div class="col-md-3">
            <button class="btn btn-dark m-3 text-end" data-bs-toggle="modal" data-bs-target="#addCateModal">Thêm danh
                mục</button>
            <div class="card">
                <div class="card-body">
                    <div class="">
                        @foreach($categories as $cate)
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="list-group-item list-group-item-action"
                                href="{{ route('admin.categoryad', $cate->id) }}">
                                {{ $cate->name }}
                            </a>
                            <button class="btn btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editCateModal{{$cate->id}}"><i
                                    class="fa-solid fa-pen-to-square"></i></button>

                            <form action="{{ route('categories.destroy', ['id' => $cate->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this category?')">
                                    <i class="fa-regular fa-circle-xmark" style="color: #ff0000;"></i>
                                </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="col-9">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Hình</th>
                        <th scope="col">Giá</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $rowNumber = 1;
                    @endphp
                    @if(isset($selectedCategoryProducts))
                    @foreach ($selectedCategoryProducts as $product)
                    <tr>
                        <td scope="row">{{ $rowNumber }}</td>
                        <td class="center-text">{{ $product->name }}</td>
                        <td>
                            @if ($product->img)
                            <img src="{{ $product->img }}" alt="{{ $product->name }}" style="width: 100px;"
                                height="100px">
                            @endif
                        </td>
                        <td>{{ $product->price }}</td>

                    </tr>
                    @php
                    $rowNumber++;
                    @endphp
                    @endforeach
                    @endif
                </tbody>
            </table>
            @if(isset($selectedCategoryProducts))
            <div class="pagination justify-content-center">
                {{ $selectedCategoryProducts->links() }}
            </div>
            @endif
        </div>
    </div>

</div>
<!-- Modal Thêm danh mục -->
<div class="modal fade" id="addCateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form để nhập thông tin sản phẩm -->
                <form action="{{ route('categoryad.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" ng-model="" name="name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@foreach ($categories as $cate)
<div class="modal fade" id="editCateModal{{$cate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa sản phẩm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('category.update', $cate->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $cate->name }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Sửa danh mục</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach

@endsection