@extends('layouts.admin')

@section('title')
    Dashboard | HMI
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard HMI Cabang Bekasi</h2>
            <p class="dashboard-subtitle">
                Komisariat (P) Fakultas Teknik Universitas Pelita Bangsa.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Anggota
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $member }} Orang
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Arsip Surat
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $mail }} Surat
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                               User
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $user }} User
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                               Berita
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{-- {{ $transaction }} --}}
                                20
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                               Potret Agenda
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{-- {{ $transaction }} --}}
                                30
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                               Info Training
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{-- {{ $transaction }} --}}
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                               Kritik dan saran
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{-- {{ $transaction }} --}}
                                100
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
