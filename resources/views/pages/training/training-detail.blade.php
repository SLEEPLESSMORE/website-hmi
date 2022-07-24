@extends('layouts.page') @section('title')
    Detail Training| HMI
@endsection
@section('content')
@section('breadcrumb')
    {{ $training->judul }}
@endsection
<div class="page-content">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg order-lg order-1">
                <article class="single-service">
                    <figure>
                        <center>
                            <img class="rounded text-center" src="{{ Storage::url($training->photo) }}"
                                alt="Service Title" />
                        </center>
                    </figure>
                    <h2>Detail</h2>
                    <label>Deskripsi</label>
                    <p>
                        {!! $training->desc !!}
                    </p>
                    <label>Tempat</label>
                    <p>{{ $training->place }}</p>
                    <label>Tanggal</label>
                    <p>{{ \Carbon\Carbon::parse($training->tgl)->format('d M Y') }}</p>
                    <center>
                        <br>
                        <a href="https://api.whatsapp.com/send?phone=6283153890071&text=Halo%2C%20kak" target="_blank"
                            class="theme-btn">Info lebih lanjut <i class="icofont-double-right"></i></a>
                    </center>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection
