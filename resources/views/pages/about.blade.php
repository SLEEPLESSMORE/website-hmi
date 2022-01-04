@extends('layouts.page') @section('title') Tentang HMI | HMI @endsection
@section('content') @section('breadcrumb') Tentang HMI @endsection
<div class="page-content">
  <!-- ===================== -->
  <!-- welcome-section start -->
  <div class="welcome-section">
    <div class="container-xl">
      <div class="row">
        <div class="col-lg-6">
          <section>
            <h2>Tentang HMI</h2>
            <p>
              Himpunan Mahasiswa Islam-Majelis Penyelamat Organisasi (HMI-MPO)
              merupakan organisasi utama dari Himpunan Mahasiswa Islam. Himpunan
              Mahasiswa Islam itu sendiri merupakan Organisasi Mahasiswa Islam
              terbesar di Indonesia. Penambahan istilah MPO ini lahir saat
              menjelang kongres HMI ke-16 yang diselenggarakan di Padang,
              Sumatera Barat pada tanggal 24-31 Maret 1986. HMI mengalami
              perpecahan internal sebagai akibat dari represi dari rezim Orde
              Baru yang memaksa penerapan Azas Tunggal Pancasila. HMI yang
              semula hanya berazaskan Islam terbelah menjadi dua kubu, yaitu
              antara kubu yang tetap mempertahankan azas Islam dengan kubu yang
              berusaha mengikuti perintah Presiden Soeharto mengubah azasnya
              menjadi Pancasila. Kubu yang tetap mempertahankan azas Islam dalam
              HMI kemudian menamakan diri dengan Himpunan Mahasiswa
              Islam-Majelis Penyelamat Organisasi disingkat HMI-MPO. Sedangkan
              kubu yang mengikuti perintah Presiden Soeharto sering disebut
              HMI-DIPO, dikarenakan Sekretariat Pengurus Besarnya yang berada di
              Jalan Diponegoro. HMI-MPO lebih senang menamakan diri sebagai HMI
              1947, karena mengacu pada tahun pendirian Himpunan Mahasiswa Islam
              yang sejak awal menetapkan Islam sebagai azas organisasinya.
            </p>
          </section>
        </div>
        <div class="col-lg-6">
          <div class="welcome-tab">
            <ul
              class="welcomeTab-list nav justify-content-center"
              id="welcome-tabs"
              style="font-size: 14px"
              role="tablist"
            >
              <li>
                <a
                  id="tab-01"
                  data-toggle="tab"
                  href="#tab1"
                  role="tab"
                  aria-controls="tab1"
                  aria-selected="false"
                  >Tujuan</a
                >
              </li>
              <li>
                <a
                  id="tab-03"
                  data-toggle="tab"
                  href="#tab3"
                  role="tab"
                  aria-controls="tab3"
                  aria-selected="false"
                  >Usaha</a
                >
              </li>
            </ul>
            <div class="tab-content" id="welcomeTab-content">
              <div
                class="tab-pane fade show active"
                id="tab3"
                role="tabpanel"
                aria-labelledby="tab-03"
              >
                <p>
                  <li>
                    - 1. Membina pribadi muslim untuk mencapai <i>akhlaqul karimah</i>.
                  </li>
                  <br />
                  <li>
                    - 2. Membina pribadi muslim yang mandiri.
                  </li>
                  <br />
                  <li>
                    - 3. Mengembangkan potensi kreatif, keilmuan , sosial dan budaya.
                  </li>
                  <br />
                  <li>
                    - 4. Mempelopori pengembangan ilmu pengetahuan dan teknologi bagi kemaslahatan masa depan umat manusia.
                  </li>
                  <br />
                  <li>
                    - 5. Memajukan kehidupan umat dalam mengamalkan <i>dienul</i> islam dalam kehidupan pribadi, bermasyarakat, berbangsa dan bernegara.
                  </li>
                  <br />
                  <li>
                    - 6. Memperkuat <i>ukhuwah islamiyah</i> sesama umat islam se-dunia.
                  </li>
                  <br />
                  <li>
                    - 7. Berperan aktif dalam dunia kemahasiswaan, perguruan tinggi dan kepemudaan untuk menopang pembangunan nasional.
                  </li> <br>
                  <li>
                      - 8. Ikut terlibat aktif dalam penyelesaian persoalan sosial kemasyarakatan dan kebangsaan.
                  </li> <br>
                  <li>
                      - 9. Usaha - usaha lain yang tidak bertentangan dengan ayat (1) s.d (7) dan sesuai dengan asas, fungsi, dan peran organisasi serta berguna untuk mencapai tujuan organisasi.
                  </li>
                </p>
              </div>
              <div
                class="tab-pane fade show active"
                id="tab1"
                role="tabpanel"
                aria-labelledby="tab-01"
              >
                <p>
                  Terbinanya insan akademis, pencipta, pengabdi yang bernafaskan islam dan bertanggung jawab atas terwujudnya masyarakat adil makmur yang di ridhoi Allah SWT.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- welcome-section end -->
  <!-- =================== -->

  <!-- ================= -->
  <!-- video-section start -->
  <div class="video-section">
    <div class="container-xl">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-lg-6">
          <figure class="vdo-onLeft">
            <img src="assets/img/videos-banner.jpg" alt="Video Thumb" />
            <a
              class="video-link mfp-iframe"
              href="https://www.youtube.com/watch?v=mcvqOUtcAJg"
            >
              <i class="icofont-ui-play"></i>
            </a>
          </figure>
        </div>
        <div class="col-xl-4 pl-xl-0 col-lg-6 overflow-hidden">
          <div class="video-content right">
            <h2 class="wow animate__animated animate__slow animate__fadeInUp">
              Check Video To Find Out More Our Service.
            </h2>
            <p class="wow animate__animated animate__slow animate__fadeInUp">
              Lorem Ipsum is simply dummy text the printing typesetting
              industry. Lorem Ipsum has been industry's standard dummy text ever
              since the to make.
            </p>
            <a
              href="contact.html"
              class="
                theme-btn
                wow
                animate__animated animate__slow animate__fadeInUp
              "
            >
              Contact US <i class="icofont-double-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- video-section end -->
  <!-- =============== -->

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
    <div class="container-fluid mt-5 pt-xl-5 ">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-3 col-sm-6">
            <figure
              class="
                team-member
                wow
                animate__animated animate__slow animate__fadeInUp
              "
            >
              <img
                src="assets/img/hmi/pic-10.png"
                alt="Team Member Name"
              />
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
              <img
                src="assets/img/hmi/pic-10.png"
                alt="Team Member Name"
              />
              <figcaption>
                <h3>Ridwan Maulana</h3>
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
              <img
                src="assets/img/hmi/pic-10.png"
                alt="Team Member Name"
              />
              <figcaption>
                <h3>Aldi Affia <br> Rizky</h3>
                <p>Bendahara Umum</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
  </div>
  <!-- team-section end -->
  <!-- ================ -->
</div>
@endsection
