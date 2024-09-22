@extends('layout.main')

@section('title', 'Месечен Билетен')

@section('content')
    <img src="{{ asset('images/news/cover-img.png') }}" class="mw-100" alt="">
    <div class="timeline">

        <div class="timeline-item">
            <div class="description">
                <h1 class="font_headings fw-bold">Август,2023</h1>
                <p class="font_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius numquam fuga
                    cupiditate officiis
                    voluptatum exercitationem minima quasi quia cum!</p>
            </div>
            <div class="dot"></div>
            <div class="date"><img src="{{ asset('images/news/1.png') }}" alt=""></div>
        </div>

        <div class="timeline-item">
            <div class="date"><img src="{{ asset('images/news/2.png') }}" alt=""></div>
            <div class="dot"></div>
            <div class="description text-start">
                <h1 class="font_headings fw-bold">Август,2023</h1>
                <p class="font_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius numquam fuga
                    cupiditate officiis
                    voluptatum exercitationem minima quasi quia cum!</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-item">
                <div class="description">
                    <h1 class="font_headings fw-bold">Август,2023</h1>
                    <p class="font_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius numquam fuga
                        cupiditate officiis
                        voluptatum exercitationem minima quasi quia cum!</p>
                </div>
                <div class="dot"></div>
                <div class="date"><img src="{{ asset('images/news/3.png') }}" alt=""></div>
            </div>
        </div>

        <!-- Add more timeline items as needed -->
    </div>
@endsection
