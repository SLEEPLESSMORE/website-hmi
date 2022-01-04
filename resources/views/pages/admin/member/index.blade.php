@extends('layouts.admin')

@section('title')
    Store Dashboard
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
                Daftar Anggota HMI
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('member.create') }}" class="btn btn-primary mb-3 ">
                                + Tambah Anggota Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered dt-responsive nowrap w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>TTL</th>
                                        <th>Fakultas</th>
                                        <th>Universitas</th>
                                        <th>LK1</th>
                                        <th>Lokasi</th>
                                        <th>LK2</th>
                                        <th>Lokasi</th>
                                        <th>SC</th>
                                        <th>Lokasi</th>
                                        <th>LK3</th>
                                        <th>Lokasi</th>
                                        <th>LKK</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'name', name: 'name' },
                { data: 'alamat', name: 'alamat' },
                { data: 'ttl', name: 'ttl' },
                { data: 'fakultas', name: 'fakultas' },
                { data: 'univ', name: 'univ' },
                { data: 'lk1', name: 'lk1' },
                { data: 'lok1', name: 'lok1' },
                { data: 'lk2', name: 'lk2' },
                { data: 'lok2', name: 'lok2' },
                { data: 'sc', name: 'sc' },
                { data: 'loksc', name: 'loksc' },
                { data: 'lk3', name: 'lk3' },
                { data: 'lok3', name: 'lok3' },
                { data: 'lkk', name: 'lkk' },
                { data: 'lok4', name: 'lok4' },


                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush
