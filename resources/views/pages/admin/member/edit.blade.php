@extends('layouts.admin')

@section('title')
  Sunting Anggota | HMI
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Anggota HMI</h2>
        <p class="dashboard-subtitle">
            Edit data "{{ $item->name }}" Anggota HMI
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
          <form action="{{ route('member.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Anggota</label>
                      <input type="text" class="form-control" name="name" value="{{ $item->name }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat Anggota</label>
                      <input type="text" class="form-control" name="alamat" value="{{ $item->alamat }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>TTL</label>
                      <input type="date" class="form-control" name="ttl" value="{{ $item->ttl }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Fakultas/Jurusan</label>
                      <input type="text" class="form-control" name="fakultas" value="{{ $item->fakultas }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Universitas</label>
                      <input type="text" class="form-control" name="univ" value="{{ $item->univ }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LK1</label>
                      <input type="text" class="form-control" name="lk1" value="{{ $item->lk1 }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="lok1" value="{{ $item->lok1 }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LK2</label>
                      <input type="text" class="form-control" name="lk2" value="{{ $item->lk2 }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="lok2" value="{{ $item->lok2 }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>SC</label>
                      <input type="text" class="form-control" name="sc" value="{{ $item->sc }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="loksc" value="{{ $item->loksc }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LK3</label>
                      <input type="text" class="form-control" name="lk3" value="{{ $item->lk3 }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="lok3" value="{{ $item->lok3 }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>LKK</label>
                      <input type="text" class="form-control" name="lkk" value="{{ $item->lkk }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" name="lok4" value="{{ $item->lok4 }}"/>
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
