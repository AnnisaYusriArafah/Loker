@extends('layout.template')

@section('title', 'Homepage')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-dark">
        <div class="card bg-dark text-white text-center">
            <img src="/images/tamu.jpg" class="card-img" alt="..." style="opacity: 0.5;">
            <div class="card-img-overlay d-flex flex-column justify-content-center ">
                <h2 class="card-title">TalentTrove</h2>
                <p class="card-text">Temukan Pekerjaan Impianmu <br> Dengan TalentTrove.com</p>
                <form action="/" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>

        <br>
        <div class="hero-wrap d-flex align-items-center justify-content-center p-4 bg-dark">
            <div class="overlay"></div>
            <div class="container bg-dark-subtle p-4 rounded">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-7 text-center heading-section heading-section-white">
                        <h2 class="mb-4"><strong>Testimoni Para Pengguna </strong></h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-3">
                    <div class="col">
                        <div class="card bg-secondary">
                            <img src="images/tanggapan.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Kairah Madrana</h5>
                                <p class="card-text">TalenTrove membantu saya mendapatkan informasi lowongan
                                    yang benar-benar cocok dengan profil saya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-secondary">
                            <img src="images/tanggapan.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Aisyah Madrana</h5>
                                <p class="card-text">TalenTrove membantu saya mendapatkan informasi lowongan
                                    yang benar-benar cocok dengan profil saya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-secondary">
                            <img src="images/tanggapan.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Miftah Madrana</h5>
                                <p class="card-text">TalenTrove membantu saya mendapatkan informasi lowongan
                                    yang benar-benar cocok dengan profil saya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card bg-secondary">
                            <img src="images/tanggapan.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sandrina Madrana</h5>
                                <p class="card-text">TalenTrove membantu saya mendapatkan informasi lowongan
                                    yang benar-benar cocok dengan profil saya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <footer class="bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
            <div class="container bg-dark-subtle text-light">
                <div class="row mb-5">
                    <div class="col-md pt-5">
                        <div class="ftco-footer-widget pt-md-5 mb-4">
                            <h2 class="ftco-heading-2"><strong>Kontak</strong></h2>

                            <ul class="footer-social list-unstyled float-md-left float-lft height: 20vh mb-2">
                                <li class="footer-social">
                                    <i class="bi bi-instagram">
                                        <a href="https://www.instagram.com/ans_ysrarfh/" target="_blank">instagram<span
                                                class="fa fa-instagram"></span></a></i>
                                </li>

                                <li class="footer-social">
                                    <i class="bi bi-facebook">
                                        <a href="#"target="_blank">Facebook<span
                                                class="fa fa-facebook"></span></a></i>
                                </li>

                                <li class="footer-social">
                                    <i class="bi bi-twitter-x">
                                        <a href="https://x.com/dam07256283?t=MwxpbqLlp-GkVC61EtCBUg&s=09"
                                            target="_blank">Twitter<span class="fa fa-twitter"></span></a></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md pt-5 border-left">
                        <div class="ftco-footer-widget pt-md-5 mb-4">
                            <h2 class="ftco-heading-2"><strong>kerjasama</strong></h2>
                            <ul class="list-unstyled">
                                <li><a class="py-2 d-block">PT.Prima Indonesia</a></li>
                                <li><a class="py-2 d-block">PT.Salindo</a></li>
                                <li><a class="py-2 d-block">PT.Cinta Sejati</a></li>
                                <li><a class="py-2 d-block">PT PLN (Persero)</a></li>
                                <li><a class="py-2 d-block">PT Bank Rakyat Indonesia</a></li>
                                <li><a class="py-2 d-block">PT Gudang Garam Tbk (GGRM)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md pt-3 border-left">
                        <div class="ftco-footer-widget pt-md-5 mb-4">
                            <h2 class="ftco-heading-2 "><strong>lokasi</strong></h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <iframe width="100%" height="300" frameborder="0" style="border:0"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7924.034282800953!2d100.3637455!3d-0.9470833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304038d2509ec919%3A0xe03ac3d9169a64dd!2sPadang%2C%20West%20Sumatra%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1641138189626!5m2!1sen!2sus"
                                        allowfullscreen></iframe>
                                    <li><span class="icon fa fa-map-marker"></span><span class="text">padang</span></li>
                                    <li><a href="https://wa.me/62813000000?text=Ingin%20Melaporkan%20Masalah"><span
                                                class="icon fa fa-whatsapp"></span><span class="text">085264861338 Admin
                                                1</span></a></li>
                                    <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                                class="text">talentrove.nisa.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>


    @endsection
