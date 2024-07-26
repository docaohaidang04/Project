<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <style>
        .avatar-container {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 55px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
    @include('admin.module.header')
    <div class="spacer" style="height: 100px;"></div>
    <div class="container-fluid">
        <div class="row">
            @include('admin.module.nav')
            @yield('content')
        </div>
    </div>
    <div class="spacer" style="height: 20px;"></div>
    @yield('content2')


</body>

</html>
<script src="https://kit.fontawesome.com/6d7fabf956.js" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>