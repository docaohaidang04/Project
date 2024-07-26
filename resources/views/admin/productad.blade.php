@extends('admin.layoutad')
@section('title','T1Shop | Quản Trị')
@section('title2','Welcome to T1Shop')
@section('banner')
@section('content')
<div class="col-md-9 p-0">
    <div class="bg-primary-subtle p-1"><i class="fa-solid fa-bars"></i></div>
    <h2 class="p-2">SẢN PHẨM</h2>
    <form action="{{ route('searchad') }}" method="GET">
        <input type="text" class="form-control" name="keyword" value="{{ request()->input('keyword') }}" placeholder="Tìm kiếm sản phẩm">
    </form>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Hình</th>
                <th scope="col">Giá</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        @php
        $rowNumber = 1;
        @endphp
        @foreach ($allProducts as $product)
        <tbody>
            <tr>
                <td scope="row">{{ $rowNumber }}</td>
                <td class="center-text">{{ $product->name }}</td>
                <td>@if ($product->img)
                    <img src="{{ $product->img }}" alt="{{ $product->name }}" style="width: 100px;" height="100px">
                    @endif
                </td>
                <td>{{ $product->price }}</td>
                <td>
                    <div class="d-flex justify-content-center bg-s ">
                        <button class="btn m-2 btn-success" data-bs-toggle="modal" data-bs-target="#editProductModal{{$product -> id }}"><i class="fa-solid fa-pen-to-square"></i></button>


                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn m-2 btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this product?')"><i class="fa-regular fa-circle-xmark"></i></button>
                        </form>
                    </div>


                </td>
            </tr>
        </tbody>
        @php
        $rowNumber++;
        @endphp
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                @if ($allProducts->previousPageUrl())
                <li class="page-item">
                    <a class="page-link" href="{{ $allProducts->previousPageUrl() }}" rel="prev">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="fa-solid fa-arrow-left"></i></span>
                </li>
                @endif

                @foreach ($allProducts->getUrlRange(1, $allProducts->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $allProducts->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endforeach

                @if ($allProducts->nextPageUrl())
                <li class="page-item">
                    <a class="page-link" href="{{ $allProducts->nextPageUrl() }}" rel="next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="fa-solid fa-arrow-right"></i></span>
                </li>
                @endif
            </ul>
        </nav>
    </div>
    <button class="btn btn-dark m-3" data-bs-toggle="modal" data-bs-target="#addProductModal">Thêm sản phẩm</button>
</div>

<!-- Modal Thêm sản phẩm -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form để nhập thông tin sản phẩm -->
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" ng-model="" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="img" name="img">
                        <img src="" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Danh mục</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach ($categories as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                            @endforeach
                        </select>

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

<!-- Modal sửa sản phẩm -->
@foreach ($allProducts as $product)
<div class="modal fade" id="editProductModal{{$product -> id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa sản phẩm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description:</label>
                        <textarea id="description" class="form-control" name="description">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category_id">Category:</label>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="img">Image:</label><br>
                        <input type="file" class="form-control" id="image" name="img">
                        <img src="{{ asset( $product->img) }}" alt="Product Image" style="max-width: 200px;">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach

@endsection