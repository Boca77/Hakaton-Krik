@extends('layout.main')

@section('title', 'Волонтери')

@section('content')
    <section class="volunteers">

        <h1 class="text-center font_headings">Нашите Волонтери</h1>
        {{-- Tabs for navigation --}}
        <div class="container">
            <div class="row">
                <div class="tab-container">
                    <div class="tab active font_text fw-bold" onclick="showContent('long-term', this)">Долг Рок</div>
                    <div class="tab font_text fw-bold" onclick="showContent('short-term', this)">Краток рок</div>
                </div>
            </div>
        </div>

        <div id="long-term" class="tab-content active">
            <div class="container">
                <div class="row">
                    @foreach ($longTermVolunteers as $volunteer)
                        <div class="col-3">
                            <a href="{{ route('volunteers.show', $volunteer->id) }}"
                                class="text-decoration-none text-black">
                                <div class="outer mt-5 vol rounded-5">
                                    <div class="image">
                                        <img class="rounded-top-5" src="{{ asset($volunteer->image) }}" alt="">
                                    </div>
                                    <div class="desc p-3 font_texts">
                                        <h3>{{ $volunteer->name }}</h3>
                                        <p>{{ $volunteer->age }}, {{ $volunteer->country }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="short-term" class="tab-content">
            <div class="container">
                <div class="row">
                    @foreach ($shortTermVolunteers as $volunteer)
                        <div class="col-3">
                            <div class="outer mt-5 vol rounded-5">
                                <div class="image">
                                    <img class="rounded-top-5" src="{{ asset($volunteer->image) }}" alt="">
                                </div>
                                <div class="desc p-3 font_texts">
                                    <h3>{{ $volunteer->name }}</h3>
                                    <p>{{ $volunteer->age }}, {{ $volunteer->country }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <p>Short term volunteer opportunities will go here.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        function showContent(tabName, tabElement) {
            // Hide all content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            // Show the selected content
            document.getElementById(tabName).classList.add('active');

            // Update active class on tabs
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });

            // Set active tab
            tabElement.classList.add('active');
        }
    </script>
@endsection
