@extends('layouts.page') @section('title') Detail Buku| HMI @endsection
@section('content') @section('breadcrumb') {{$book->judul}} @endsection
<div class="page-content">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg order-lg order-1">
        <article class="single-service">
          <figure>
            <center>
                <img
              class="rounded text-center"
              src="{{Storage::url($book->photo)}}"
              alt="Service Title"
            />
            </center>
          </figure>
          <h2>Deskripsi</h2>
          <p>
            {!! $book->desc !!}
          </p>
          <h2>Detail</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Bahasa</th>
                <th scope="col">Negara</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Penulis</th>
                <th scope="col">Jumlah Halaman</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$book->bahasa}}</td>
                <td>{{$book->negara}}</td>
                <td>{{$book->publisher}}</td>
                <td>{{$book->year}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->halaman}}</td>
              </tr>
            </tbody>
          </table>
          <div class="text-center">
            <a href="{{Storage::url($book->file)}}" target="_blank" class="theme-btn"
            >Baca Buku Sekarang <i class="icofont-double-right"></i
          ></a>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
@endsection
