<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('admin/style/main.css') }}" rel="stylesheet" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"
    />
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img
              src="{{ asset('assets/img/logo-hmi.png') }}"
              alt=""
              class="my-4"
              style="max-width: 150px"
            />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{ route('dashboard') }}"
              class="list-group-item list-group-item-action {{ Request::is('dashboard') ? 'active' : '' }} "
            >
              Dashboard
            </a>
            <a
              href="{{ route('surat.index') }}"
              class="list-group-item list-group-item-action {{ Request::is('dashboard/surat*') ? 'active' : '' }} "
            >
              Arsip Surat
            </a>
            <a
              href="{{ route('member.index') }}"
              class="list-group-item list-group-item-action {{ Request::is('dashboard/member*') ? 'active' : '' }} "
            >
              Database Anggota
            </a>
            <a
              href="{{ route('user.index') }}"
              class="list-group-item list-group-item-action {{ Request::is('dashboard/user*') ? 'active' : '' }} "
            >
              User
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              Berita
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action {{ (request()->is('admin/user*')) ? 'active' : '' }} "
            >
              Potret Agenda
            </a>
            <a
              href="{{ route('book.index') }}"
              class="list-group-item list-group-item-action {{ Request::is('dashboard/book*') ? 'active' : '' }} "
            >
              Perpustakaan
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action {{ Request::is('dashboard/book*') ? 'active' : '' }} "
            >
              Info Training
            </a>

            <a href="#" class="list-group-item list-group-item-action">
              Kritik dan saran
            </a>
            <a
              href="{{ route('keluar') }}"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="{{ asset('admin/images/icon-user.png') }}"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      Hi, {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                      <a href="{{ route('keluar') }}" class="dropdown-item"
                        >Logout</a
                      >
                    </div>
                  </li>
                </ul>

                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Hi, {{ Auth::user()->name }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- Content --}}
          @yield('content')
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{
        asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')
      }}"></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"
    ></script>

    <script>
      $("#datatable").DataTable()
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init()
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault()
        $("#wrapper").toggleClass("toggled")
      })
    </script>
    @stack('addon-script')
  </body>
</html>
