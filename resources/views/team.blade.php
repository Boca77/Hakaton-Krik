@extends('layout.main')

@section('title', 'За тимот')

@section('content')
    <div class="team">
        <div class="carousel-container">
            <h1>Запознајте го Нашиот Тим</h1>
            <div class="carousel">
                @foreach ($team as $member)
                    <a class="text-decoration-none text-black" href="{{ route('team.show', $member->id) }}">
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                            <h2>{{ $member->name }} {{ $member->last_name }}</h2>
                            <p>{{ $member->position }}</p>
                            <a href="{{ $member->linkedIn }}" class="linkedin-btn">LinkedIn</a>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="carousel-controls">
                <button class="prev-btn">&lt;</button>
                <button class="next-btn">&gt;</button>
            </div>
        </div>

    </div>

    <div class="board">
        <h1 class="text-center font_headings border-bottom pb-5 border-black">Членови на Управен Одбор</h1>
        <div class="container">
            <div class="row">
                <div class="col-6"><img src="{{ asset('images/team/1.png') }}" class=" p-5" alt=""></div>
                <div class="col-6 p-5">
                    <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti dignissimos aut numquam
                        recusandae!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, nobis? Velit repudiandae ipsam
                        eveniet consequuntur necessitatibus, tempora pariatur minima fugiat deserunt rerum perspiciatis,
                        esse eum voluptatibus fugit beatae quam? Voluptatibus?
                    </p>
                </div>

            </div>
        </div>
        <hr class="bg-black border-2 border-top border-black">
        <div class="container">
            <div class="row">
                <div class="col-6"><img src="{{ asset('images/team/2.png') }}" class=" p-5" alt=""></div>
                <div class="col-6 p-5">
                    <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti dignissimos aut numquam
                        recusandae!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, nobis? Velit repudiandae ipsam
                        eveniet consequuntur necessitatibus, tempora pariatur minima fugiat deserunt rerum perspiciatis,
                        esse eum voluptatibus fugit beatae quam? Voluptatibus?
                    </p>
                </div>
            </div>
        </div>
        <hr class="bg-black border-2 border-top border-black">
        <div class="container">
            <div class="row">
                <div class="col-6"><img src="{{ asset('images/team/3.png') }}" class=" p-5" alt=""></div>
                <div class="col-6 p-5">
                    <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti dignissimos aut numquam
                        recusandae!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, nobis? Velit repudiandae ipsam
                        eveniet consequuntur necessitatibus, tempora pariatur minima fugiat deserunt rerum perspiciatis,
                        esse eum voluptatibus fugit beatae quam? Voluptatibus?
                    </p>
                </div>
            </div>
        </div>
        <hr class="bg-black border-2 border-top border-black">
    </div>


    <script>
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const items = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        function showItem(index) {
            items.forEach((item, i) => {
                item.classList.toggle('active', i === index);
            });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
            showItem(currentIndex);
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
            showItem(currentIndex);
        });

        // Initially show the first item
        showItem(currentIndex);
    </script>
@endsection
