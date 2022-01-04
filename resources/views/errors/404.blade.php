
@extends('layouts.page')
@section('title')
    404 | HMI
@endsection
@section('breadcrumb')
   404 NOT FOUND
@endsection
@section('content')
<div class="page-content">
    <div class="error-area">
      <div class="container">
        <div class="error-content">
          <div class="row justify-content-center">
            <div class="col-xl-9">
              <div class="row">
                <div class="col">
                  <span>4</span>
                </div>
                <div class="col">
                  <span>0</span>
                </div>
                <div class="col">
                  <span>4</span>
                </div>
              </div>
              <div class="row justify-content-between align-items-center">
                <div
                  class="col-lg-7 text-center text-lg-left mb-4 mb-lg-0"
                >
                  <h3>Oops!</h3>
                  <p>
                    Mohon maaf , halaman yang kamu cari gak ada nih, balik aja yuk :)
                  </p>
                </div>
                <div class="col-lg-5 text-center text-lg-right">
                  <a href="/"
                    ><i class="icofont-double-left"></i> Kembali ke Beranda</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
