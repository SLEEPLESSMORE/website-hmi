@extends('layouts.admin')

@section('title')
    Arsip Surat | HMI
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Arsip Surat</h2>
            <p class="dashboard-subtitle">
                Daftar Arsip Surat HMI
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('surat.create') }}" class="btn btn-primary mb-3 ">
                                + Tambah Arsip Surat
                            </a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered dt-responsive nowrap w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>Tanggal Surat</th>
                                        <th>Title</th>
                                        <th>Nomor Surat</th>
                                        <th>Jenis Surat</th>
                                        <th>File Surat</th>
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
                { data: 'tanggal', name: 'tanggal' },
                { data: 'title', name: 'tile' },
                { data: 'nomor', name: 'nomor' },
                { data: 'jenis', name: 'jenis' },
                { data: 'file', name: 'file' },

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
