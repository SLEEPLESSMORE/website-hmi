
<nav class="main-menu navbar-expand-lg ml-lg-auto mr-xl-auto">
    <div class="navbar-header clearfix">
      <div class="logo">
        <a href="{{route('home')}}"
          ><img src="assets/img/logo-hmi.png" alt="" title=""
        /></a>
      </div>
      <!-- Toggle Button -->
      <button
        type="button"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target=".navbar-collapse-one"
      >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div
      class="navbar-collapse navbar-collapse-one collapse clearfix"
    >
      <ul class="navigation clearfix">
        <li class="current-menu-item">
          <a href="{{route('home')}}">Beranda</a>
        </li>
        <li class="dropdown">
          <a href="#">Profile</a>
          <ul>
            <li><a href="{{route('sejarah')}}">Sejarah HMI</a></li>
            <li><a href="{{route('tentang')}}">Tentang HMI</a></li>
            <li><a href="{{route('pengurus')}}">Susunan Kepengurusan</a></li>
            <li><a href="{{route('agenda')}}">Potret Agenda</a></li>
            <li><a href="{{route('faq')}}">FAQ</a></li>
            <li><a href="{{route('kontak')}}">Kontak</a></li>
          </ul>
        </li>
        <li><a href="#">Perpustakaan</a></li>
        <li><a href="#">Berita</a></li>
        <!-- <li><a href="service.html">service</a></li> -->
        <li><a href="#">Info Training</a></li>
      </ul>
    </div>
  </nav>
