@extends('layouts.page') @section('title') Perpustakaan Online | HMI @endsection
@section('breadcrumb') Perpustakaan Online @endsection @section('content')
@push('css')
<style>
  /* Lazy Load Styles */
  .card-image {
    display: block;
    min-height: 20rem; /* layout hack */
    background: #fff center center no-repeat;
    background-size: cover;
    filter: blur(3px); /* blur the lowres image */
  }

  .card-image > img {
    display: block;
    width: 100%;
    opacity: 0; /* visually hide the img element */
  }

  .card-image.is-loaded {
    filter: none; /* remove the blur on fullres image */
    transition: filter 1s;
  }

  /* Layout Styles */
  html,
  body {
    width: 100%;
    height: 100%;
    margin: 0;
    font-size: 16px;
    font-family: sans-serif;
  }

  .card-list {
    display: block;
    margin: 1rem auto;
    padding: 0;
    font-size: 0;
    text-align: center;
    list-style: none;
  }

  .card {
    display: inline-block;
    width: 90%;
    max-width: 20rem;
    margin: 1rem;
    font-size: 1rem;
    text-decoration: none;
    overflow: hidden;
    box-shadow: 0 0 3rem -1rem rgba(0, 0, 0, 0.5);
    transition: transform 0.1s ease-in-out, box-shadow 0.1s;
  }

  .card:hover {
    transform: translateY(-0.5rem) scale(1.0125);
    box-shadow: 0 0.5em 3rem -1rem rgba(0, 0, 0, 0.5);
  }

  .card-description {
    display: block;
    padding: 1em 0.5em;
    color: #515151;
    text-decoration: none;
  }

  .card-description > h2 {
    margin: 0 0 0.5em;
  }

  .card-description > p {
    margin: 0;
  }
</style>
@endpush
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
          <h2>Perpustakaan Online</h2>
          <p>HMI Komisariat (P) Fakultas Teknik Universitas Pelita Bangsa.</p>
        </div>
      </div>
      <div
        class="
          team-button
          wow
          animate__animated animate__slow animate__fadeInUp
        "
        data-wow-delay="0.3s"
      ></div>
    </div>
  </div>
  <div class="container-fluid mt-5 pt-xl-5">
    <ul class="card-list">
      <li class="card">
        <a
          class="card-image"
          href="https://michellezauner.bandcamp.com/album/psychopomp-2"
          target="_blank"
          style="background-image: url(assets/img/buku/book1.jpeg)"
          data-image-full="assets/img/buku/book1.jpeg"
        >
          <img src="assets/img/buku/book1.jpeg" alt="Psychopomp" />
        </a>
        <a
          class="card-description"
          href="https://michellezauner.bandcamp.com/album/psychopomp-2"
          target="_blank"
        >
          <h2>Judul Buku</h2>
          <p>Pengarang Buku</p>
        </a>
      </li>

      <li class="card">
        <a
          class="card-image"
          href="https://budi.kemdikbud.go.id/buku/pdf/1.%20Amir%20si%20tukang%20semir_revisi%20fiks.pdf"
          target="_blank"
          style="background-image: url(assets/img/buku/book1.jpeg)"
          data-image-full="assets/img/buku/book1.jpeg"
        >
          <img src="assets/img/buku/book1.jpeg" alt="let's go" />
        </a>
        <a
          class="card-description"
          href="https://budi.kemdikbud.go.id/buku/pdf/1.%20Amir%20si%20tukang%20semir_revisi%20fiks.pdf"
          target="_blank"
        >
          <h2>Judul Buku</h2>
          <p>Pengarang Buku</p>
        </a>
      </li>
      <li class="card">
        <a
          class="card-image"
          href="https://inlovewithaghost.bandcamp.com/album/lets-go"
          target="_blank"
          style="background-image: url(assets/img/buku/book1.jpeg)"
          data-image-full="assets/img/buku/book1.jpeg"
        >
          <img src="assets/img/buku/book1.jpeg" alt="let's go" />
        </a>
        <a
          class="card-description"
          href="https://inlovewithaghost.bandcamp.com/album/lets-go"
          target="_blank"
        >
          <h2>Judul Buku</h2>
          <p>Pengarang Buku</p>
        </a>
      </li>
    </ul>
    <ul class="card-list">
        <li class="card">
          <a
            class="card-image"
            href="https://michellezauner.bandcamp.com/album/psychopomp-2"
            target="_blank"
            style="background-image: url(assets/img/buku/book1.jpeg)"
            data-image-full="assets/img/buku/book1.jpeg"
          >
            <img src="assets/img/buku/book1.jpeg" alt="Psychopomp" />
          </a>
          <a
            class="card-description"
            href="https://michellezauner.bandcamp.com/album/psychopomp-2"
            target="_blank"
          >
            <h2>Judul Buku</h2>
            <p>Pengarang Buku</p>
          </a>
        </li>

        <li class="card">
          <a
            class="card-image"
            href="https://budi.kemdikbud.go.id/buku/pdf/1.%20Amir%20si%20tukang%20semir_revisi%20fiks.pdf"
            target="_blank"
            style="background-image: url(assets/img/buku/book1.jpeg)"
            data-image-full="assets/img/buku/book1.jpeg"
          >
            <img src="assets/img/buku/book1.jpeg" alt="let's go" />
          </a>
          <a
            class="card-description"
            href="https://budi.kemdikbud.go.id/buku/pdf/1.%20Amir%20si%20tukang%20semir_revisi%20fiks.pdf"
            target="_blank"
          >
            <h2>Judul Buku</h2>
            <p>Pengarang Buku</p>
          </a>
        </li>
        <li class="card">
          <a
            class="card-image"
            href="https://inlovewithaghost.bandcamp.com/album/lets-go"
            target="_blank"
            style="background-image: url(assets/img/buku/book1.jpeg)"
            data-image-full="assets/img/buku/book1.jpeg"
          >
            <img src="assets/img/buku/book1.jpeg" alt="let's go" />
          </a>
          <a
            class="card-description"
            href="https://inlovewithaghost.bandcamp.com/album/lets-go"
            target="_blank"
          >
            <h2>Judul Buku</h2>
            <p>Pengarang Buku</p>
          </a>
        </li>
      </ul>
  </div>
</div>
@push('custom-js')
<script>
  // This is "probably" IE9 compatible but will need some fallbacks for IE8
  // - (event listeners, forEach loop)

  // wait for the entire page to finish loading
  window.addEventListener("load", function () {
    // setTimeout to simulate the delay from a real page load
    setTimeout(lazyLoad, 1000)
  })

  function lazyLoad() {
    var card_images = document.querySelectorAll(".card-image")

    // loop over each card image
    card_images.forEach(function (card_image) {
      var image_url = card_image.getAttribute("data-image-full")
      var content_image = card_image.querySelector("img")

      // change the src of the content image to load the new high res photo
      content_image.src = image_url

      // listen for load event when the new photo is finished loading
      content_image.addEventListener("load", function () {
        // swap out the visible background image with the new fully downloaded photo
        card_image.style.backgroundImage = "url(" + image_url + ")"
        // add a class to remove the blur filter to smoothly transition the image change
        card_image.className = card_image.className + " is-loaded"
      })
    })
  }
</script>
@endpush @endsection
