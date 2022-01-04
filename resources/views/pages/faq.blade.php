@extends('layouts.page')
@section('title')
    FAQ | HMI
@endsection
@section('breadcrumb')
    FAQ
@endsection
@section('content')
<div class="team-section">
    <div class="container">
      <div class="d-xl-flex d-block justify-content-center">
        <div
          class="
            section-header
            wow
            animate__animated animate__slow animate__fadeInUp
          "
        >
          <div class="text-center">
            <h2>Pertanyaan yang sering ditanyakan</h2>
            <p>
              Pertanyaan-pertanyaan yang sering kalian tanyakan soal Himpunan mahasiswa islam.
            </p>
          </div>
        </div>
        <div
          class="
            team-button
            wow
            animate__animated animate__slow animate__fadeInUp
          "
          data-wow-delay="0.3s"
        >
          {{--
          <a href="contact.html" class="theme-btn"
            >Join With Us <i class="icofont-double-right"></i
          ></a>
          --}}
        </div>
      </div>
    </div>
    <div class="container-fluid mt-5 pt-xl-5">
      <div class="row d-flex justify-content-center">
        <div class="faq-area">
            <div class="accordion" id="faq-wraper">
                <div class="card">
                    <div class="card-header" id="faq-2">
                        <h2 class="faq_title">
                            <a class="collapsed" type="button" data-toggle="collapse" data-target="#faq_2" aria-expanded="false" aria-controls="faq_2">
                                <span>Can I upgrade my plan anytime I want?</span>
                                <i class="faq-icon"></i>
                            </a>
                        </h2>
                    </div>
                    <div id="faq_2" class="collapse" aria-labelledby="faq-2" data-parent="#faq-wraper">
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since the 1500s, when an unknown printer took galley of type
                            and make type specimen has survived not only five centuries.
                        </div>
                    </div>
                </div>
                <div class="card active-faq">
                    <div class="card-header" id="faq-1">
                        <h2 class="faq_title">
                            <a type="button" data-toggle="collapse" data-target="#faq_1" aria-expanded="true" aria-controls="faq_1">
                                <span>Do I need to make a payment?</span>
                                <i class="faq-icon"></i>
                            </a>
                        </h2>
                    </div>

                    <div id="faq_1" class="collapse show" aria-labelledby="faq-1" data-parent="#faq-wraper">
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since the 1500s, when an unknown printer took galley of type
                            and make type specimen has survived not only five centuries.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faq-3">
                        <h2 class="faq_title">
                            <a class="collapsed" type="button" data-toggle="collapse" data-target="#faq_3" aria-expanded="false" aria-controls="faq_3">
                                <span>Can I track my daily task here?</span>
                                <i class="faq-icon"></i>
                            </a>
                        </h2>
                    </div>
                    <div id="faq_3" class="collapse" aria-labelledby="faq-3" data-parent="#faq-wraper">
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since the 1500s, when an unknown printer took galley of type
                            and make type specimen has survived not only five centuries.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faq-4">
                        <h2 class="faq_title">
                            <a class="collapsed" type="button" data-toggle="collapse" data-target="#faq_4" aria-expanded="false" aria-controls="faq_4">
                                <span> Where can I download all versions?</span>
                                <i class="faq-icon"></i>
                            </a>
                        </h2>
                    </div>
                    <div id="faq_4" class="collapse" aria-labelledby="faq-4" data-parent="#faq-wraper">
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since the 1500s, when an unknown printer took galley of type
                            and make type specimen has survived not only five centuries.
                        </div>
                    </div>
                </div>
            </div>
        </div
      </div>
    </div>
  </div>
>
@endsection
