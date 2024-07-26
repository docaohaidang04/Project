@extends('admin.layoutad')
@section('title','T1Shop | Quản Trị')
@section('title2','Welcome to T1Shop')
@section('banner')
@section('content')

<div class="col-md-9 p-0">
    <div class="bg-primary-subtle p-1"><i class="fa-solid fa-bars"></i></div>
    <h2 class="p-2">TỔNG QUAN</h2>
    <div class="container p-3">
        <div class="row">
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(243, 184, 76); border-radius: 10px;">
                    <h3 class="card-title p-2">20</h3>
                    <p class="card-text p-2">Sản phẩm
                    </p>
                    <div class="text-center">
                        <a href="productad.html" class="text-decoration-none text-light"><i class="fa-solid fa-circle-arrow-right"></i> Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(132, 225, 132); border-radius: 10px;">
                    <h3 class="card-title p-2">4</h3>
                    <p class="card-text p-2">Danh mục
                    </p>
                    <div class="text-center">
                        <a href="categoryad.html" class="text-decoration-none text-light"><i class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(127, 127, 237); border-radius: 10px;">
                    <h3 class="card-title p-2">2</h3>
                    <p class="card-text p-2">Nhân viên
                    </p>
                    <div class="text-center">
                        <a href="userad.html" class="text-decoration-none text-light"><i class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(110, 199, 240); border-radius: 10px;">
                    <h3 class="card-title p-2">2</h3>
                    <p class="card-text p-2">Khách hàng
                    </p>
                    <div class="text-center">
                        <a href="member.html" class="text-decoration-none text-light"><i class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(118, 118, 232); border-radius: 10px;">
                    <h3 class="card-title p-2">4</h3>
                    <p class="card-text p-2">Đơn hàng chưa xử lý
                    </p>
                    <div class="text-center">
                        <a href="card.html" class="text-decoration-none text-light"><i class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(213, 118, 232); border-radius: 10px;">
                    <h3 class="card-title p-2">2</h3>
                    <p class="card-text p-2">Đơn hàng đã xử lý
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-decoration-none text-light"><i class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(239, 111, 162); border-radius: 10px;">
                    <h3 class="card-title p-2">0</h3>
                    <p class="card-text p-2">Liên hệ gần đây
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-decoration-none text-light"><i class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content2')
<div class="spacer" style="height: 20px;"></div>
<div class="container-fluid">
    <h2 class="text-center">THỐNG KÊ</h2>

    <div class="row">
        <div class="col-sm-6">
            <canvas id="revenueChart" width="800" height="400"></canvas>
        </div>
        <div class="col-sm-6">
            <canvas id="newUsersChart" width="800" height="400"></canvas>
        </div>
    </div>
</div>


<script src="https://kit.fontawesome.com/6d7fabf956.js" crossorigin="anonymous"></script>
<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
<script>
    var ctx = document.getElementById('revenueChart').getContext('2d');

    // Dữ liệu doanh thu (ví dụ)
    var data = {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9',
            'Tháng 10', 'Tháng 11', 'Tháng 12'
        ],
        datasets: [{
            label: 'Doanh thu',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: [3500, 3500, 3500, 3500, 0, 2500, 2200, 2800, 3000, 3200, 3500,
                0
            ] // Dữ liệu doanh thu theo tháng
        }]
    };

    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    var myChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });

    var ctx = document.getElementById('newUsersChart').getContext('2d');

    // Dữ liệu số người dùng mới (ví dụ)
    var data = {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9',
            'Tháng 10', 'Tháng 11', 'Tháng 12'
        ],
        datasets: [{
            label: 'Số người dùng mới',
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            data: [100, 150, 120, 180, 200, 250, 220, 280, 300, 320, 350,
                380
            ] // Dữ liệu số người dùng mới theo tháng
        }]
    };

    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>

@endsection