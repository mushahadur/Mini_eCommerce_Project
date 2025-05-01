<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
   @include('frontend.layouts.includes.style')

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        @include('frontend.layouts.components.header-topbar')
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        @include('frontend.layouts.components.header-middle')
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        @include('frontend.layouts.components.header-bottom')
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->
    {{-- Main Contain Section Start --}}
        @yield('contain')
    {{-- Main Contain Section End --}}
    

    <!-- Start Footer Area -->
    @include('frontend.layouts.components.footer')
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    @include('frontend.layouts.includes.script')
</body>

</html>