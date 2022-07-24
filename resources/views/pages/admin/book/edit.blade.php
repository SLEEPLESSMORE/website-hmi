@extends('layouts.admin')

@section('title')
  Tambah Data Buku | HMI
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Daftar Buku HMI</h2>
        <p class="dashboard-subtitle">
            Edit Data {{$item->judul}}
        </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('book.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Judul Buku</label>
                      <input type="text" class="form-control" name="judul" value="{{ $item->judul }}" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Photo Sampul</label>
                      <input type="file" class="form-control" name="photo"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Penulis Buku</label>
                      <input type="text" class="form-control" name="author" value="{{ $item->author }}" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Halaman Buku</label>
                      <input type="text" class="form-control" name="halaman" value="{{ $item->halaman }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Bahasa</label>
                      <input type="text" class="form-control" name="bahasa" value="{{ $item->bahasa }}" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Negara</label>
                      <input type="text" class="form-control" name="negara" value="{{ $item->negara }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Penerbit Buku</label>
                      <input type="text" class="form-control" name="publisher" value="{{ $item->publisher }}" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tahun Terbit</label>
                      <input type="month" class="form-control" name="year" value="{{ $item->year }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Sinopsis Buku</label>
                      <textarea name="desc" id="editor" value="{{ $item->desc }}"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Upload File</label>
                      <input type="file" class="form-control" name="file"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Simpan data
                    </button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor');
</script>
@endpush
