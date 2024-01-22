<!DOCTYPE html>
<html>
<head> 
    <!-- Head-->
    @include('backend.partials.head-backend')
    <!-- Head-->
</head>
<body>
    <!-- Header Start-->
    <header class="header">   
        @include('backend.layout.header-backend')
    </header>
    <!-- Header End-->

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation Start-->
        <nav id="sidebar">
            @include('backend.layout.sidebar-backend')
        </nav>
        <!-- Sidebar Navigation end-->

        <div class="page-content">
        <!-- Content Start-->
            @yield('content')
            {{-- @include('backend.layout.content-backend') --}}
        <!-- Content End-->

        <!-- Footer Start-->
            @include('backend.layout.footer-backend')
        <!-- Footer End-->
        </div>

    </div>

    <!-- Foot-->
        @include('backend.partials.foot-backend')
    <!-- Foot-->
</body>
</html>