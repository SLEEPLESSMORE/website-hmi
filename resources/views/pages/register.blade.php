@extends('layouts.page')
@section('title')
    Register | HMI
@endsection
@section('breadcrumb')
    Register
@endsection
@section('content')
        <!-- ======================= -->
    <!-- contact-form-area start -->
    <div class="contact-form-area" id="contact-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <form class="contact-form">
                        <h2>Daftar Anggota HMI</h2>
                        <div class="row">
                            <input type="text" placeholder="username kamu"/>
                            <input type="text" placeholder="email kamu"/>
                            <input type="password" placeholder="password kamu"/>
                            <input type="password" placeholder="ulangi password kamu"/>
                            <div class="col-12 text-center">
                                <button type="submit" class="theme-btn">Daftar<i class="icofont-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div><br></div>
    <!-- contact-form-area end -->
@endsection
