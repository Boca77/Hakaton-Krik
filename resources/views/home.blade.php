@extends('layout.main')

@section('title', 'Home')

@section('content')
    <section class="header" style="background-image: url('{{ asset('images/homepage/herosection.jpg') }}')">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <h1 class="text-center font_headings">ПРОМЕНАТА ДОАЃА ОД МЛАДИТЕ</h1>
            </div>
            <div class="row justify-content-center">
                <h2 class="font_hedings fw-bold text-center">Кои Сме Ние?</h2>
                <p class="text-center font_text">Центарот за младински активизам Крик е
                    невладина, непрофитна организација
                    основана од млади луѓе, предводена од
                    млади луѓе и работи за и со млади луѓе.
                </p>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="" class="text-center btn font_headings rounded-pill p-3 fw-bold button">Повеќе За Нас</a>
            </div>
            <div class="container position-absolute info_board">
                <div class="row">
                    <div class="col-6 bg-black rounded-start-5 p-5">
                        <h3 class="text-warning font_headings">НАСКОРО</h3>
                        <h4 class="text-white font_headings my-5">Нижиме заедно</h4>
                        <p class="text-white p-2 mb-5">Проектот „Еднакви можности за девојчињата и младите
                            жени во Северна Македонија" го спроведуваат
                            Националниот младински совет на Македонија и Stella
                            Network, со финансиска поддршка од страна на
                            Британската амбасада во Скопје.</p>
                        <div class="container ">
                            <div class="row">
                                <div class="col-6">
                                    <a href=""
                                        class="text-center btn font_headings rounded-pill p-3 fw-bold bg-warning w-100">Види
                                        Повеќе</a>
                                </div>
                                <div class="col-6">
                                    <a href=""
                                        class="text-center btn font_headings rounded-pill p-3 fw-bold purple w-100">Пријави
                                        се!</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 rounded-end-5"
                        style="background-image: url('{{ asset('images/homepage/homepage_nastan.jpg') }}'); background-position: center; background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>br
    <section class="stats text-center p-0 pt-5">
        <hr>
        <div class="container ">
            <div class="row">
                <div class="col-4">
                    <p class="number fw-bold font_headings mb-0">320+</p>
                    <p class="text">Проекти</p>
                </div>
                <div class="col-4">
                    <p class="number fw-bold font_headings mb-0">580+</p>
                    <p class="text">Волонтери</p>
                </div>
                <div class="col-4">
                    <p class="number fw-bold font_headings mb-0">25+</p>
                    <p class="text">Партнери</p>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <section>
        <div class="container p-2 mt-5">
            <div class="row mt-5">
                <div class="col-8">
                    <video width="100%" height="350" class="rounded-5" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-4 bg-black rounded-5 p-5">
                    <h3 class="text-white font_headings">Стани <br> Волонтер</h3>
                    <p class="text-white font_text my-5">Сакаш да работиш Со Млади Лица? Оваа
                        Можност Е Токму За Тебе.</p>
                    <a href="{{ route('volunteer') }}" class="join_us text-decoration-none rounded-pill font_text">
                        Придружи Ни Се
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="news" style="width: 100%;">
        <div class="container mt-5">
            <h2 class="text-center font_headings">Нашите Новости</h2>
            <div class="row overflow-auto" style="overflow-y: hidden; overflow-x: auto; white-space: nowrap;">
                <div class="d-flex flex-row flex-nowrap col-12">
                    <!-- Post 1 -->
                    <div class="post m-3 rounded-5"
                        style="background-image: url('{{ asset('images/homepage/homepage_uslugi_cardimg.jpg') }}'); width: 450px;">
                        <div class="content">
                            <div class="container post_body">
                                <div class="row">
                                    <div class="col-6 bg-warning rounded-pill post_title">
                                        <p class="font_text p-1 text-center mb-0">АКТИВНОСТ ECO-ACTION</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font_text text-white">
                                            <i class="fa-regular fa-calendar-days text-white"></i> 25.08.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="mb-0 mt-4 text-white font_text">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Laborum, veritatis</p>
                                </div>
                                <div class="row">
                                    <a href="#" class="mb-0 mt-4 text-white font_text">
                                        Види Повеќе <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post m-3 rounded-5"
                        style="background-image: url('{{ asset('images/homepage/homepage_uslugi_cardimg.jpg') }}'); width: 450px;">
                        <div class="content">
                            <div class="container post_body">
                                <div class="row">
                                    <div class="col-6 bg-warning rounded-pill post_title">
                                        <p class="font_text p-1 text-center mb-0">АКТИВНОСТ ECO-ACTION</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font_text text-white">
                                            <i class="fa-regular fa-calendar-days text-white"></i> 25.08.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="mb-0 mt-4 text-white font_text">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Laborum, veritatis</p>
                                </div>
                                <div class="row">
                                    <a href="#" class="mb-0 mt-4 text-white font_text">
                                        Види Повеќе <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post m-3 rounded-5"
                        style="background-image: url('{{ asset('images/homepage/homepage_uslugi_cardimg.jpg') }}'); width: 450px;">
                        <div class="content">
                            <div class="container post_body">
                                <div class="row">
                                    <div class="col-6 bg-warning rounded-pill post_title">
                                        <p class="font_text p-1 text-center mb-0">АКТИВНОСТ ECO-ACTION</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font_text text-white">
                                            <i class="fa-regular fa-calendar-days text-white"></i> 25.08.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="mb-0 mt-4 text-white font_text">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Laborum, veritatis</p>
                                </div>
                                <div class="row">
                                    <a href="#" class="mb-0 mt-4 text-white font_text">
                                        Види Повеќе <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post m-3 rounded-5"
                        style="background-image: url('{{ asset('images/homepage/homepage_uslugi_cardimg.jpg') }}'); width: 450px;">
                        <div class="content">
                            <div class="container post_body">
                                <div class="row">
                                    <div class="col-6 bg-warning rounded-pill post_title">
                                        <p class="font_text p-1 text-center mb-0">АКТИВНОСТ ECO-ACTION</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font_text text-white">
                                            <i class="fa-regular fa-calendar-days text-white"></i> 25.08.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="mb-0 mt-4 text-white font_text">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Laborum, veritatis</p>
                                </div>
                                <div class="row">
                                    <a href="#" class="mb-0 mt-4 text-white font_text">
                                        Види Повеќе <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post m-3 rounded-5"
                        style="background-image: url('{{ asset('images/homepage/homepage_uslugi_cardimg.jpg') }}')">
                        <div class="content">
                            <div class="container post_body">
                                <div class="row">
                                    <div class="col-6 bg-warning rounded-pill post_title">
                                        <p class="font_text p-1 text-center mb-0">АКТИВНОСТ ECO-ACTION</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font_text text-white">
                                            <i class="fa-regular fa-calendar-days text-white"></i> 25.08.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="mb-0 mt-4 text-white font_text">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Laborum, veritatis</p>
                                </div>
                                <div class="row">
                                    <a href="#" class="mb-0 mt-4 text-white font_text">
                                        Види Повеќе <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container mt-3 text-end p-3" style="position: relative;">
        <a href="" class="button blue-button" style="position: absolute; right: 0; bottom: 0;">Види за Цел
            Месец</a>
    </div>
    <br><br><br>
    <div class="container" style="min-height: 80vh;">
        <br><br>
        <div class="row align-items-center pt-5 pb-5">
            <!-- First Column (Image) -->
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <img src="{{ asset('images/students108126313-2048x2048.jpg') }}" alt="Image description"
                    class="img-fluid rounded-5">
            </div>
            <!-- Second Column (Text) -->
            <div class="col-12 col-md-6">
                <h3 class="fw-bold fs-5">01 Мултифункционален Центарот Крик </h3>
                <p class="fs-5">Целната група со која КРИК работи се сите луѓе Lorem ipsum dolor sit amet c
                    d doloribus pariatur nulla repudiandae.</p>
                <hr>
                <h3 class="fw-bold fs-5">02 Мултифункционален Центарот Крик </h3>
                <p class="fs-5">Целната група со која КРИК работи се сите луѓе Lorem ipsum dolor sit amet consectetur adi
                    d doloribus pariatur nulla repudiandae.</p>
                <hr>
                <h3 class="fw-bold fs-5">03 Мултифункционален Центарот Крик </h3>
                <p class="fs-5">Целната група со која КРИК работи се сите луѓе Lorem ipsum dtetur adi
                    d doloribus pariatur nulla repudiandae.</p>
                <hr>
            </div>
        </div>
    </div>

@endsection
