@extends('layouts.page')
@section('title')
    Kontak kami | HMI
@endsection
@section('breadcrumb')
    Kontak kami
@endsection
@section('content')
<div class="page-content">
    <!-- ================== -->
    <!-- contact-info start -->
    <div class="contact-info">
        <div class="container">
            <div class="contact-inner">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="contact-single">
                                    <i class="icofont-ui-call"></i>
                                    <h4>Telepon</h4>
                                    <p>088219757265 / 089665105778</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-single">
                                    <i class="icofont-location-pin"></i>
                                    <h4>Alamat</h4>
                                    <p>Sekretariat : Jl. Inspeksi Kalimalang No.9 Tegal Danas, Cikarang Selatan, Bekasi 17530</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-single">
                                    <i class="icofont-email"></i>
                                    <h4>E-mail</h4>
                                    <p>hmifatekupb1947 <br> @gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-info end -->
    <!-- ================ -->

    <!-- ======================= -->
    <!-- contact-form-area start -->
    <div class="contact-form-area" id="contact-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <form class="contact-form">
                        <h2>kritik dan saran</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Nama lengkap" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Email" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Telepon/whatsapp" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" />
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Isi pesan"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="theme-btn">Kirim Pesan <i class="icofont-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-form-area end -->


    <!-- ======================= -->
    <!-- contact-form-area start -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5417892409587!2d107.16697671446663!3d-6.323752163638625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b0b789915db%3A0x79a70b6853caf9ac!2sJl.%20Inspeksi%20Kalimalang%20No.9%2C%20Cibatu%2C%20Kec.%20Cikarang%20Pusat%2C%20Bekasi%2C%20Jawa%20Barat%2017530!5e0!3m2!1sid!2sid!4v1636732671718!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- contact-form-area end -->

</div>
@endsection
