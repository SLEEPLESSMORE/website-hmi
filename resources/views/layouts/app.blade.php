<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="HMI | Himpunan Mahasiswa Islam" />
    <meta name="Helena" content="HMI" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="assets/logo.png" />

    @include('includes.style')
</head>
@stack('custom-css')

<body>
    <!-- ================== -->
    <!-- page-wrapper start -->
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- ============ -->
        <!-- header start -->
        <header class="main-header">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">
                    <div class="header-inner clearfix">
                        <div class="logo-outer">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="assets/img/logo-hmi.png" width="178px"
                                        alt="" title="" /></a>
                            </div>
                        </div>

                        <!-- Main Menu -->
                        @include('includes.navbar')
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>
        <!-- header end -->
        <!-- ========== -->

        <!-- ================== -->
        <!-- site-content start -->
        <main class="site-content">
            <!-- ==================== -->
            <!-- slider-wrapper start -->
            @include('includes.slider')
            <!-- slider-wrapper end -->
            <!-- ================== -->

            @yield('content')
            <!-- testimony-section end -->
            <!-- ===================== -->
        </main>
        <!-- site-content end -->
        <!-- ================ -->

        <!-- ============ -->
        <!-- footer start -->
        @include('includes.footer')
        <!-- footer end -->
        <!-- ========== -->
    </div>
    <!-- page-wrapper end -->
    <!-- ================ -->
    <a href="https://api.whatsapp.com/send?phone=6283153890071&text=Halo%2C%20ada%20yang%20bisa%20kami%20bantu%3F"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <div class="scroll-to-top" data-target="html">
        <i class="icofont-arrow-up"></i>
    </div>

    <!-- js assets -->
    @include('includes.script') @stack('custom-js')
</body>

</html>
