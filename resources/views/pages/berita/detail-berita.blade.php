@extends('layouts.page') @section('title')
    {{ $berita->judul }}
@endsection
@section('content')
@section('breadcrumb')
    {{ $berita->judul }}
@endsection
<div class="page-content">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg order-lg order-1">
                <article class="single-service">
                    <figure>
                        <center>
                            <img class="rounded text-center" src="{{ Storage::url($berita->photo) }}"
                                alt="{{ $berita->judul }}" />
                        </center>
                    </figure>
                    <div class="row justify-content-center">
                        <div class="column">
                            <div> <i class='fa fa-calendar'></i>
                                {{ \Carbon\Carbon::parse($berita->tgl)->format('d M Y') }}</div>
                        </div>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <div class="column">
                            <div> <i class='fa fa-user'></i>
                                Admin HMI</div>
                        </div>
                    </div>
                    <p>
                        {!! $berita->desc !!}
                    </p>
                    <center>
                        <br>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}" target="_blank"
                            class="theme-btn">Share Berita <i class="icofont-double-right"></i></a>
                    </center>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection
