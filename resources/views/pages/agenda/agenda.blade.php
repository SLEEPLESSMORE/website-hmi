@extends('layouts.page')
@section('title')
    Info Agenda | HMI
@endsection
@section('breadcrumb')
    Info Agenda
@endsection
@section('content')
    @push('css')
        <style>
            .post-module {
                width: 360px;
                margin: 30px auto;
                position: relative;
                border: 1px solid #DDD;
                border-radius: 20px;
            }

            .post-module:hover .thumbnail img {
                opacity: 0.6;
                transform: scale(1.1);
            }

            .thumbnail {
                height: 400px;
                position: relative;
                overflow: hidden;
                background: #000;
                border: #000
            }

            .thumbnail img {
                width: 120%;
                transition: 0.3s;
            }

            .thumbnail .date {
                position: absolute;
                height: 56px;
                width: 56px;
                border-radius: 100%;
                background: #e74c3c;
                color: #fff;
                text-align: center;
                padding: 12px 0;
                top: 20px;
                right: 20px;
                z-index: 1;
            }

            .post-content {
                padding: 30px;
                position: absolute;
                bottom: 0;
                background: #fff;
                width: 100%;
            }

            .category {
                background: #e74c3c;
                color: #fff;
                padding: 5px 10px;
                position: absolute;
                top: 0px;
                left: 0px;
                transform: translateY(-100%);
            }

            .title {
                font-size: 24px;
                color: #333;
                font-weight: 700;
                padding-bottom: 10px;
            }

            .sub-title {
                color: #e74c3c;
                font-size: 20px;
                font-weight: 400;
                padding-bottom: 20px;
            }

            .description {
                width: 250px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                display: inline-block;
            }

            .post-meta {
                margin-top: 30px;
                color: #999;
            }

            .post-meta a {
                color: #999;
                text-decoration: none;
            }

            .post-meta *:before,
            .post-meta *:after {
                display: inline;
            }

            .comments {
                margin-left: 16px;
            }
        </style>
    @endpush
    <div class="feature-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div
                        class="
              section-header
              text-center
              overflow-hidden
              wow
              animate__animated animate__slow animate__fadeInUp
            ">
                        <h2>Info Agenda HMI</h2>
                        <p>HMI Komisariat (P) Fakultas Teknik Universitas Pelita Bangsa.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5 pt-xl-5">
            <div class="row d-flex justify-content-center">
                @forelse ($agendas as $agenda)
                    <div class='post-module'>
                        <div class='thumbnail'>
                            <img onclick="location.href='{{ route('detail-training', $agenda->judul) }}';"
                                src='{{ Storage::url($agenda->photo) }}'>
                        </div>
                        <div class='post-content'>
                            <div class='category'> <i class='fa fa-calendar'></i>
                                {{ \Carbon\Carbon::parse($agenda->tgl)->format('d M Y') }}</div>
                            <h1 class='title'>{{ $agenda->judul }}</h1>
                            <div class='post-meta'>
                                <span class='timestamp'>
                                    <i class='fa fa-map'></i>
                                    {{ $agenda->place }}
                                </span>
                                <span class='comments'>
                                    <i class='fa fa-comments'></i>
                                    <a href='{{ route('detail-training', $agenda->judul) }}'>Read More ...</a>
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        @push('custom-js')
            <script>
                $(function() {
                    $(".post-module").hover(function() {
                        $(".description").stop().animate({
                            'height': 'toggle'
                        }, 300);
                    });
                });
            </script>
        @endpush
    @endsection
