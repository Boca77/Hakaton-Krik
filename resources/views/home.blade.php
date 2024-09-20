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
    <section class="stats text-center p-0">
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


@endsection
