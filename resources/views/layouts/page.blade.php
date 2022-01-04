<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="HMI | Himpunan Mahasiswa Islam"
    />
    <meta name="author" content="Design Tone" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="assets/logo.png" />

    @include('includes.style')
    @stack('css')
  </head>

  <body>
    <!-- ================== -->
    <!-- page-wrapper start -->
    <div class="page-wrapper">
      <!-- ============ -->
      <!-- header start -->
      <header class="main-header">
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="container clearfix">
              <div class="header-inner clearfix">
                <div class="logo-outer">
                  <div class="logo">
                    <a href="{{route('home')}}"
                      ><img
                        src="assets/img/logo-hmi.png"
                        width="178px"
                        alt=""
                        title=""
                    /></a>
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
        <div class="innerPage-banner">
          <div class="container">
            <div class="d-flex flex-wrap">
              <div class="pageBanner-content">
                <div class="breadcrumbs">
                  <a href="{{route('home')}}">Beranda</a>
                  <span>@yield('breadcrumb')</span>
                </div>
              </div>
            </div>
          </div>
          <div class="scroling-lines">
            <span>
              <span data-parallax='{"y":750, "smoothness":45}'></span>
            </span>
            <span>
              <span data-parallax='{"y":-550, "smoothness":55}'></span>
            </span>
            <span>
              <span data-parallax='{"y":250, "smoothness":65}'></span>
            </span>
            <span>
              <span data-parallax='{"y":650, "smoothness":25}'></span>
            </span>
            <span>
              <span data-parallax='{"y":-450, "smoothness":45}'></span>
            </span>
          </div>
        </div>
        <!-- /.innerPage-banner -->

        @yield('content')
        <!-- /.page-content -->
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

    <div class="scroll-to-top" data-target="html">
      <i class="icofont-arrow-up"></i>
    </div>
    <!-- /.back2Top button -->

    <!-- js assets -->
    @include('includes.script') @stack('custom-js')
  </body>
</html>
