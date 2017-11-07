<!--
 * @Copyright (C), 2017
 * @Name         _header.blade.php
 * @Author       zhuo
 * @Version      beta 1.0
 * @Date         2017/11/7 15:43
 * @Description  布局的头部区域文件，负责顶部导航栏区块；
 * @Class        List
 *    1.
 * @Function     List
 *    1.
 * @History
 *   <author> <time>               <version> <desc>
 *   zhuo   2017/11/7 15:43 beta 1.0  第一次建立该文件
 -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                LaraBBS
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li><a href="#">登录</a></li>
                <li><a href="#">注册</a></li>
            </ul>
        </div>
    </div>
</nav>

