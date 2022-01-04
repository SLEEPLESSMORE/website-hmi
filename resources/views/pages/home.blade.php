@extends('layouts.app') @section('title') HMI Cabang Bekasi | Komisariat
Fakultas Teknik @endsection @section('content') @push('custom-css')
<style>
  .float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 5px;
    background-color: #25d366;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    z-index: 100;
  }

  .my-float {
    margin-top: 16px;
  }
</style>
@endpush
<!-- ===================== -->
<!-- feature-section start -->
<div class="feature-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div
          class="
            section-header
            text-center
            overflow-hidden
            wow
            animate__animated animate__slow animate__fadeInUp
          "
        >
          <h2>HMI Cabang Bekasi</h2>
          <p>Komisariat (P) Fakultas Teknik Universitas Pelita Bangsa.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- feature-section end -->
<!-- =================== -->
<!-- ================= -->
<!-- video-section start -->
<div class="video-section">
  <div class="container-xl">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-4 pr-xl-0 col-lg-6 overflow-hidden">
        <div class="video-content">
          <h2
            class="wow animate__animated animate__slow animate__fadeInUp"
            style="font-size: 30px"
          >
            Selamat datang
          </h2>
          <p class="wow animate__animated animate__slow animate__fadeInUp">
            Selamat datang di Website HMI Komisariat (P) Fakultas Teknik
            Universitas Pelita Bangsa, website ini bermaksud menjadi sarana
            untuk bersilaturahmi, sarana publikasi dan juga menjadi media
            informasi dari HMI Komisariat (P) Fakultas Teknik Universitas Pelita
            Bangsa.
          </p>
          <p>
            Kritik dan saran terhadap kekurangan dan kesalahan yang ada pada
            kami sangat membantu untuk kedepan yang lebih baik, semoga Website
            ini memberikan manfaat bagi kita semua.
          </p>
          <i
            >Ihsan Nuur Hidayatullah - <br />
            Ketua Umum HMI FATEK</i
          >
          <br />
          <img src="assets/img/hmi/ttd2.png" width="300px" alt="" />
        </div>
      </div>
      <div class="col-lg-6">
        <figure>
          <img src="assets/img/hmi/pic-5.png" alt="Video Thumb" />
        </figure>
      </div>
    </div>
  </div>
</div>
<!-- video-section end -->
<!-- =============== -->

<!-- =================== -->
<!-- about-section start -->
<div class="about-section">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg-6">
        <div class="about-content">
          {{--
          <h2>Selamat datang di website HMI</h2>
          --}}
          <h4>Sejarah HMI</h4>
          <p>
            Dengan ungkapan ini jelaslah hubungan Lafran Pane dengan HMI tidak
            bisa dipisahkan. Latar belakang pemikiran Lafran Pane untuk
            mendirikan HMI, adalah juga identik dengan latar belakang munculnya
            pemikiran HMI. Dengan demikian memahami pemikiran Lafran Pane, akan
            senantiasa terdapat proses komunikasi dan ekspresi dengan
            lingkungannya, yaitu negara Indonesia yang berpenduduk mayoritas
            beragama Islam, dengan segala realitas dan totalitasnya. Pemikiran
            Lafran tidak bisa dipahami tanpa meletakkannya dalam suatu proses
            sejarah atau tradisi panjang yang melingkupinya. <br />
            Sesuai dengan konteksnya, latar belakang munculnya pemikiran HMI
            adalah ..... <br />
          </p>
          <a href="{{ route('sejarah') }}" class="theme-btn"
            >Selengkapnya ... <i class="icofont-double-right"></i
          ></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="intro-gallery">
          <div class="tab-content" id="img-gallery">
            <div
              class="tab-pane fade"
              id="tab1"
              role="tabpanel"
              aria-labelledby="tab-01"
            >
              <figure>
                <img src="assets/img/hmi/pic-1.jpeg" alt="Gallery Image" />
              </figure>
            </div>
            <div
              class="tab-pane fade show active"
              id="tab2"
              role="tabpanel"
              aria-labelledby="tab-02"
            >
              <figure>
                <img src="assets/img/hmi/pic-2.jpeg" alt="Gallery Image" />
              </figure>
            </div>
            <div
              class="tab-pane fade"
              id="tab3"
              role="tabpanel"
              aria-labelledby="tab-03"
            >
              <figure>
                <img src="assets/img/hmi/pic-3.jpeg" alt="Gallery Image" />
              </figure>
            </div>
          </div>
          <ul class="about-gallery-list nav" id="about-imgs" role="tablist">
            <li>
              <a
                id="tab-01"
                data-toggle="tab"
                href="#tab1"
                role="tab"
                aria-controls="tab1"
                aria-selected="false"
              >
                <figure>
                  <img
                    src="assets/img/hmi/pic-1.jpeg"
                    alt="about img-gallery"
                  />
                </figure>
              </a>
            </li>
            <li>
              <a
                class="active"
                id="tab-02"
                data-toggle="tab"
                href="#tab2"
                role="tab"
                aria-controls="tab2"
                aria-selected="true"
              >
                <figure>
                  <img
                    src="assets/img/hmi/pic-2.jpeg"
                    alt="about img-gallery"
                  />
                </figure>
              </a>
            </li>
            <li>
              <a
                id="tab-03"
                data-toggle="tab"
                href="#tab3"
                role="tab"
                aria-controls="tab3"
                aria-selected="false"
              >
                <figure>
                  <img
                    src="assets/img/hmi/pic-3.jpeg"
                    alt="about img-gallery"
                  />
                </figure>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- about-section end -->
<!-- ================= -->

<!-- ===================== -->
<!-- service-section start -->
{{--
<div class="service-section">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div
          class="
            section-header
            text-center
            wow
            animate__animated animate__slow animate__fadeInUp
          "
        >
          <h2>We Offer Differnt Service</h2>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting
            text ever since the printer took a galley.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="service-area">
    <div class="container-xl">
      <div class="row">
        <div class="col-lg-6">
          <div class="service-single">
            <figure>
              <a href="service.html">
                <img src="assets/img/service/01.jpg" alt="Service Thumb" />
              </a>
            </figure>
            <div class="service-card">
              <h2>
                <a href="service.html" class="tdu-hover">Private Security</a>
              </h2>
              <p>
                Lorem Ipsum simply dummy text the printing and text ever since
                the printer.
              </p>
              <a href="service.html"
                >Read More <i class="icofont-double-right"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-single">
            <figure>
              <a href="service.html">
                <img src="assets/img/service/02.jpg" alt="Service Thumb" />
              </a>
            </figure>
            <div class="service-card">
              <h2>
                <a href="service.html" class="tdu-hover">Banking Sectors</a>
              </h2>
              <p>
                Lorem Ipsum simply dummy text the printing and text ever since
                the printer.
              </p>
              <a href="service.html"
                >Read More <i class="icofont-double-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="service-single">
            <figure>
              <a href="service.html">
                <img src="assets/img/service/03.jpg" alt="Service Thumb" />
              </a>
            </figure>
            <div class="service-card">
              <h2>
                <a href="service.html" class="tdu-hover">Shoping & Retail</a>
              </h2>
              <p>
                Lorem Ipsum simply dummy text the printing and text ever since
                the printer.
              </p>
              <a href="service.html"
                >Read More <i class="icofont-double-right"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-single">
            <figure>
              <a href="service.html">
                <img src="assets/img/service/04.jpg" alt="Service Thumb" />
              </a>
            </figure>
            <div class="service-card">
              <h2>
                <a href="service.html" class="tdu-hover">Education Institute</a>
              </h2>
              <p>
                Lorem Ipsum simply dummy text the printing and text ever since
                the printer.
              </p>
              <a href="service.html"
                >Read More <i class="icofont-double-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="service.html" class="theme-btn"
        >Other Services <i class="icofont-double-right"></i
      ></a>
    </div>
  </div>
</div>
--}}
<!-- service-section end -->
<!-- =================== -->

<!-- ================== -->
<!-- team-section start -->
<div class="team-section">
    <div class="container">
        <div
          class="
            d-xl-flex d-block
            justify-content-xl-between
            align-items-xl-center
          "
        >
          <div
            class="
              section-header
              wow
              animate__animated animate__slow animate__fadeInUp
            "
          >
            <h2>Susunan Pengurus</h2>
            <p>
              Susunan Kepengurusan HMI Komisariat (P) Fakultas Teknik Universitas
              Pelita Bangsa.
            </p>
          </div>
          <div
            class="
              team-button
              wow
              animate__animated animate__slow animate__fadeInUp
            "
            data-wow-delay="0.3s"
          >
            <a href="{{route('pengurus')}}" class="theme-btn"
              >Selengkapnya ... <i class="icofont-double-right"></i
            ></a>
          </div>
        </div>
      </div>
  <div class="container-fluid mt-5 pt-xl-5">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-3 col-sm-6">
        <figure
          class="
            team-member
            wow
            animate__animated animate__slow animate__fadeInUp
          "
        >
          <img src="assets/img/hmi/pic-10.png" alt="Team Member Name" />
          <figcaption>
            <h3>Ihsan Nuur Hidayatullah</h3>
            <p>Ketua Umum</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-3 col-sm-6">
        <figure
          class="
            team-member
            wow
            animate__animated animate__slow animate__fadeInUp
          "
          data-wow-delay="0.3s"
        >
          <img src="assets/img/hmi/pic-10.png" alt="Team Member Name" />
          <figcaption>
            <h3>Faris Muammar</h3>
            <p>Sekretaris Umum</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-3 col-sm-6">
        <figure
          class="
            team-member
            wow
            animate__animated animate__slow animate__fadeInUp
          "
          data-wow-delay="0.6s"
        >
          <img src="assets/img/hmi/pic-10.png" alt="Team Member Name" />
          <figcaption>
            <h3>
              Aldi Affia <br />
              Rizky
            </h3>
            <p>Bendahara Umum</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>
<!-- team-section end -->
<!-- ================ -->

<!-- ====================== -->
<!-- ==================== -->

<!-- ======================= -->
<!-- testimony-section start -->
<div class="testimony-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div
          class="
            section-header
            text-center
            wow
            animate__animated animate__slow animate__fadeInUp
          "
        >
          <h2>Kata - Kata Senior</h2>
          <p>Sepatah duapatah kata dari senior kami.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="testimony-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="review-buttons">
            <div class="row no-gutters">
              <div class="col-4">
                <figure
                  class="wow animate__animated animate__fadeInBottomRight"
                >
                  <a href="#" data-review="1" class="review-btn active">
                    <img src="assets/img/hmi/pic-11.png" alt="Reviewed by" />
                  </a>
                </figure>
              </div>
              <div class="col-4 offset-4">
                <figure class="wow animate__animated animate__fadeInBottomLeft">
                  <a href="#" data-review="2" class="review-btn">
                    <img src="assets/img/hmi/pic-11.png" alt="Reviewed by" />
                  </a>
                </figure>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-4 offset-4">
                <figure>
                  <a href="#" data-review="3" class="review-btn">
                    <img src="assets/img/hmi/pic-11.png" alt="Reviewed by" />
                  </a>
                </figure>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-4">
                <figure class="wow animate__animated animate__fadeInTopRight">
                  <a href="#" data-review="4" class="review-btn">
                    <img src="assets/img/hmi/pic-11.png" alt="Reviewed by" />
                  </a>
                </figure>
              </div>
              <div class="col-4 offset-4">
                <figure class="wow animate__animated animate__fadeInTopLeft">
                  <a href="#" data-review="5" class="review-btn">
                    <img src="assets/img/hmi/pic-11.png" alt="Reviewed by" />
                  </a>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimony-content">
            <div class="review-single active">
              <div class="review-inner overflow-hidden">
                <img
                  src="assets/img/quote.png"
                  alt="Quote"
                  class="animate__animated animate__fadeInUp animate__slow"
                />
                <p class="animate__animated animate__fadeInLeft">
                  It has survived not only five an centuries typeset remaining
                  essentially unchanged popular the release and more recent five
                  and centurbut also these tesetng remaining essentially.
                </p>
                <div
                  class="
                    reviewer
                    d-flex
                    align-items-center
                    animate__animated animate__fadeInLeft animate__slow
                  "
                >
                  <img src="assets/img/testimony/01.jpg" alt="Reviewed By" />
                  <div class="reviewed-by">
                    <h3>Allexa William</h3>
                    <span>UI/UX Designer</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="review-single">
              <div class="review-inner overflow-hidden">
                <img
                  src="assets/img/quote.png"
                  alt="Quote"
                  class="animate__animated animate__fadeInUp animate__slow"
                />
                <p class="animate__animated animate__fadeInLeft">
                  It has survived not only five an centuries typeset remaining
                  essentially unchanged popular the release and more recent five
                  and centurbut also these tesetng remaining essentially.
                </p>
                <div
                  class="
                    reviewer
                    d-flex
                    align-items-center
                    animate__animated animate__fadeInLeft animate__slow
                  "
                >
                  <img src="assets/img/testimony/02.jpg" alt="Reviewed By" />
                  <div class="reviewed-by">
                    <h3>John Doe</h3>
                    <span>QA Manager</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="review-single">
              <div class="review-inner overflow-hidden">
                <img
                  src="assets/img/quote.png"
                  alt="Quote"
                  class="animate__animated animate__fadeInUp animate__slow"
                />
                <p class="animate__animated animate__fadeInLeft">
                  It has survived not only five an centuries typeset remaining
                  essentially unchanged popular the release and more recent five
                  and centurbut also these tesetng remaining essentially.
                </p>
                <div
                  class="
                    reviewer
                    d-flex
                    align-items-center
                    animate__animated animate__fadeInLeft animate__slow
                  "
                >
                  <img src="assets/img/testimony/03.jpg" alt="Reviewed By" />
                  <div class="reviewed-by">
                    <h3>Birgit Robb</h3>
                    <span>UI/UX Designer</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="review-single">
              <div class="review-inner overflow-hidden">
                <img
                  src="assets/img/quote.png"
                  alt="Quote"
                  class="animate__animated animate__fadeInUp animate__slow"
                />
                <p class="animate__animated animate__fadeInLeft">
                  It has survived not only five an centuries typeset remaining
                  essentially unchanged popular the release and more recent five
                  and centurbut also these tesetng remaining essentially.
                </p>
                <div
                  class="
                    reviewer
                    d-flex
                    align-items-center
                    animate__animated animate__fadeInLeft animate__slow
                  "
                >
                  <img src="assets/img/testimony/04.jpg" alt="Reviewed By" />
                  <div class="reviewed-by">
                    <h3>Anna Rogario</h3>
                    <span>UI/UX Developer</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="review-single">
              <div class="review-inner overflow-hidden">
                <img
                  src="assets/img/quote.png"
                  alt="Quote"
                  class="animate__animated animate__fadeInUp animate__slow"
                />
                <p class="animate__animated animate__fadeInLeft">
                  It has survived not only five an centuries typeset remaining
                  essentially unchanged popular the release and more recent five
                  and centurbut also these tesetng remaining essentially.
                </p>
                <div
                  class="
                    reviewer
                    d-flex
                    align-items-center
                    animate__animated animate__fadeInLeft animate__slow
                  "
                >
                  <img src="assets/img/testimony/05.jpg" alt="Reviewed By" />
                  <div class="reviewed-by">
                    <h3>Zoya Sabastian</h3>
                    <span>SEO Specialist</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="team-section">
    <div class="container">
        <div
          class="
            d-xl-flex d-block
            justify-content-xl-between
            align-items-xl-center
          "
        >
          <div
            class="
              section-header
              wow
              animate__animated animate__slow animate__fadeInUp
            "
          >
            <h2>Update terbaru</h2>
            <p>
              Update terbaru HMI Komisariat (P) Fakultas Teknik Universitas
              Pelita Bangsa.
            </p>
          </div>
          <div
            class="
              team-button
              wow
              animate__animated animate__slow animate__fadeInUp
            "
            data-wow-delay="0.3s"
          >
            <a href="{{route('pengurus')}}" class="theme-btn"
              >Selengkapnya <i class="icofont-double-right"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="service-area">
        <div class="container-xl">
          <div class="row">
            <div class="col-lg-6">
              <div class="service-single">
                <figure>
                  <a href="service.html">
                    <img
                      src="https://pbhmi.info/wp-content/uploads/2020/01/Menko-Mahfud-958x717.jpeg"
                      alt="Service Thumb"
                    />
                  </a>
                </figure>
                <div class="service-card">
                  <h2>
                    <a href="service.html" class="tdu-hover"
                      >Berita Terkini</a
                    >
                  </h2>
                  <p>
                    <i class="icofont-clock-time"></i> 12/03/2021
                  </p>
                  <p>
                    Lorem Ipsum simply dummy text the printing and text ever
                    since the printer.
                  </p>
                  <a href="service.html"
                    >Read More <i class="icofont-double-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="service-single">
                <figure>
                  <a href="service.html">
                    <img
                      src="https://pbhmi.info/wp-content/uploads/2020/01/DSCF4167-958x540.jpg"
                      alt="Service Thumb"
                    />
                  </a>
                </figure>
                <div class="service-card">
                  <h2>
                    <a href="service.html" class="tdu-hover"
                      >Berita Terkini</a
                    >
                  </h2>
                  <p>
                    <i class="icofont-clock-time"></i> 12/03/2021
                  </p>
                  <p>
                    Lorem Ipsum simply dummy text the printing and text ever
                    since the printer.
                  </p>
                  <a href="service.html"
                    >Read More <i class="icofont-double-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@push('custom-js')
<script>
  /* Demo purposes only */
  $(".hover").mouseleave(function () {
    $(this).removeClass("hover")
  })
</script>
@endpush @endsection
