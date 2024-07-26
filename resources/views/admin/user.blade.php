@extends('admin.layoutad')
@section('title','T1Shop | Quản Trị')
@section('title2','Welcome to T1Shop')
@section('banner')
@section('content')
<div class="col-md-9 p-0">
    <div class="bg-primary-subtle p-3"><i class="fa-solid fa-bars"></i></div>
    <h2 class="p-2">KHÁCH HÀNG</h2>
    <form action="{{ route('searchad') }}" method="GET">
        <input type="text" class="form-control" name="keyword" value="{{ request()->input('keyword') }}" placeholder="Tìm kiếm">
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Năm sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Chức năng</th>
                <th scope="col">Thao tác</th>

            </tr>
        </thead>
        @php
        $rowNumber = 1;
        @endphp
        @foreach ($allUser as $user)
        <tbody>
            <tr>
                <td scope="row">{{ $rowNumber }}</td>
                <td class="center-text">{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->birth_year }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    @if ($user->role == 1)
                    Người dùng
                    @else
                    Admin
                    @endif
                </td>
                <td>
                    <div class="d-flex justify-content-center align-items-center">
                        <!-- Nút chỉnh sửa người dùng -->
                        <button class="btn btn-success m-2" data-bs-toggle="modal" data-bs-target="#edituserModal{{$user->id}}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>

                        <!-- Nút khóa/mở khóa người dùng -->
                        @if($user->block)
                        <a class="btn btn-primary m-2" href="{{ route('unlockUser', ['id' => $user->id]) }}">
                            <i class="fa-solid fa-lock"></i> Mở khóa
                        </a>
                        @else
                        <a class="btn btn-danger m-2" href="{{ route('lockUser', ['id' => $user->id]) }}">
                            <i class="fa-solid fa-lock-open"></i> Khóa
                        </a>
                        @endif
                    </div>
                </td>
            </tr>
        </tbody>
        @php
        $rowNumber++;
        @endphp
        @endforeach
    </table>
    </table>
</div>
@foreach ($allUser as $user)
<div class="modal fade" id="edituserModal{{$user -> id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thành viên</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('userad.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="name">Tên:</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
                    </div>

                    <div>
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" readonly>
                    </div>

                    <div>
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                    </div>

                    <div>
                        <label for="gender">Giới tính:</label>
                        <select name="gender" disabled>
                            <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Nam</option>
                            <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Nữ</option>
                            <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Khác</option>
                        </select>
                    </div>

                    <div>
                        <label for="dob">Ngày sinh:</label>
                        <input type="date" class="form-control" name="dob" value="{{ $user->dob }}" readonly>
                    </div>

                    <div>
                        <label for="role">Vai trò:</label>
                        <select name="role" class="form-control">
                            <option value="1" {{ $user->role == '1' ? 'selected' : '' }}>Người dùng</option>
                            <option value="2" {{ $user->role == '2' ? 'selected' : '' }}>Admin</option>

                        </select>

                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Cập nhật vai trò</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach
@endsection