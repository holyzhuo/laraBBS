<!--
 * @Copyright (C), 2017
 * @Name         app.blade.php
 * @Author       zhuo
 * @Version      beta 1.0
 * @Date         2017/11/7 15:43
 * @Description  主要布局文件，项目的所有页面都将继承于此页面
 * @Class        List
 *    1.
 * @Function     List
 *    1.
 * @History
 *   <author> <time>               <version> <desc>
 *   zhuo   2017/11/7 15:43 beta 1.0  第一次建立该文件
 -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

        @yield('content')

    </div>

    @include('layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>