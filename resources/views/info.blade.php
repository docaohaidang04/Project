@extends('layout')
@section('title','T1Shop | Lịch sử mua hàng')
@section('title2','Welcome to T1Shop')
@section('content')
<style>
    .rounded-image {
        width: 150px;
        /* Bạn có thể điều chỉnh kích thước theo nhu cầu */
        height: 150px;
        /* Bạn có thể điều chỉnh kích thước theo nhu cầu */
        border-radius: 50%;
        object-fit: cover;
    }

    .file-upload {
        margin-top: 20px;
        /* Khoảng cách giữa ảnh và nút chọn tệp */
    }

    .file-label {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        /* Màu nền của nút */
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .file-input {
        display: none;
        /* Ẩn input file mặc định */
    }
</style>
<div class="spacer" style="height: 80px;"></div>
<div class="container">
</div>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Hồ sơ của tôi</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Quản lý thông tin để bảo mật tài khoản</h6>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <!--  <div class="mb-3">
                                <label for="username" class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="username" value="docaohaidang" readonly>
                            </div> -->
                        <form method="POST" action="{{ route('user.info') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Tên</label>
                                        <input type="text" class="form-control" id="fullName" name="name" value="{{ $user->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Số điện thoại</label>
                                        <input type="tel" class="form-control" id="phoneNumber" name="phone" value="{{ $user->phone }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Giới tính</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ $user->gender == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="male">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ $user->gender == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="female">Nữ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{ $user->gender == 'other' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other">Khác</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Ngày sinh</label>
                                        <input type="date" class="form-control" id="dob" name="dob" value="{{ $user->dob }}">
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-center align-items-center">
                                    <div class="content-center text-center">
                                        @if ($user->img)
                                        <img id="preview-image" src="{{ asset('img/' . $user->img) }}" alt="" class="rounded-image" width="150">
                                        @else
                                        <img id="preview-image" src="img/default.jpg" alt="" class="rounded-image" width="150">
                                        @endif
                                        <div class="file-upload mt-3">
                                            <label for="file-input" class="file-label">Chọn ảnh</label>
                                            <input type="file" id="file-input" class="file-input" name="img" accept="image/jpeg, image/png">
                                        </div>
                                        <p class="mt-2">Dụng lượng file tối đa 1 MB<br>Định dạng: .JPEG, .PNG</p>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Lưu</button>
                        </form>


                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="spacer" style="height: 90px;"></div>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview-image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
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