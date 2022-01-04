@extends('layouts.admin')

@section('title')
  Tambah Data anggota | HMI
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Anggota</h2>
        <p class="dashboard-subtitle">
            Tambah data anggota
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
          <form action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Anggota</label>
                      <input type="text" class="form-control" name="name" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat Anggota</label>
                      <input type="text" class="form-control" name="alamat" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>TTL</label>
                      <input type="date" class="form-control" name="ttl" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Fakultas/Jurusan</label>
                      <input type="text" class="form-control" name="fakultas" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Universitas</label>
                      <input type="text" class="form-control" name="univ" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LK1</label>
                      <input type="text" class="form-control" name="lk1" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="lok1" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LK2</label>
                      <input type="text" class="form-control" name="lk2" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="lok2" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>SC</label>
                      <input type="text" class="form-control" name="sc" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="loksc" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LK3</label>
                      <input type="text" class="form-control" name="lok3" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LKK</label>
                      <input type="text" class="form-control" name="lkk" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="lok4" />
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
