<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum Laravel - @yield('title', 'Home')</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    <!-- css -->
    @yield('css')

</head>
<body class="bg-white">


@include('layouts.partials.navbar')


<div class="container pb-5">

    @yield('banner')

    @yield('banner2')

    <div class="row mt-5">


        <div class="col-md-3">
            <div class="list-group">
                <a href="{{route('thread.index')}}" class="list-group-item d-flex justify-content-between align-items-center">
                    All Thread
                    <span class="badge bg-primary rounded-pill">14</span>
                </a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                    PHP
                    <span class="badge bg-primary rounded-pill">14</span>
                </a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                    Python
                    <span class="badge bg-primary rounded-pill">14</span>
                </a>
            </div>
        </div>

        <div class="col-md-9">
            <div class="content-wrap well">
            </div>
            @yield('content')
        </div>

    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
@stack('scripts')

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>
