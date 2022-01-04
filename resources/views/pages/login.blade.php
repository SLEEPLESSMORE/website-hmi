@extends('layouts.page')
@section('title')
    Login | HMI
@endsection
@section('breadcrumb')
    Login
@endsection
@section('content')
        <!-- ======================= -->
    <!-- contact-form-area start -->
    <div class="contact-form-area" id="contact-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <form class="contact-form">
                        <h2>Masuk anggota HMI</h2>
                        <div class="row">
                            <input type="text" placeholder="email kamu"/>
                            <input type="password" placeholder="password kamu"/>
                            <div class="col-12 text-center">
                                <button type="submit" class="theme-btn">Masuk<i class="icofont-double-right"></i></button>
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
