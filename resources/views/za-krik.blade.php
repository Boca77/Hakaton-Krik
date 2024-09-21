@extends('layout.main')

@section('title', 'За Крик')

@section('content')
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
                <p class="fw-bold fs-5">Центарот за младинскиот активизам Крик е невладина, непрофитна оргнанизација основана
                    од страна на млади луѓе, предводена од млади луѓе и работи за млади луѓе.</p>
                <p class="fs-5">Целната група со која КРИК работи се сите луѓе Lorem ipsum dolor sit amet consectetur adi
                    pisicing elit. Similique dolor iure consectetur ea ipsam qui adipisci neque laudantium quisquam incidunt
                    obcaecati maxime ad officiis assumenda, id doloribus pariatur nulla repudiandae.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="ms-5 fs-4">За Крик</2>
    </div>
    <hr class="my-4" style="border: 1px solid #000;">
    <div class="container">
        <div class="row justify-content-center align-items-center"">
            <div class="col-12 col-md-4 red">
                <p class="ms-5 fs-5"><b>Мисија</b> </p>
            </div>
            <div class="col-12 col-md-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti illum dolorem libero omnis minima eum
                    magnam aut enim dicta tenetur et, fuga assumenda sunt iure possimus consequuntur? Suscipit, fugit illum.
                </p>
            </div>
        </div>
    </div>
    <hr class="my-4" style="border: 1px solid #000;">
    <div class="container">
        <div class="row justify-content-center align-items-center"">
            <div class="col-12 col-md-4 red">
                <p class="ms-5 fs-5"><b>Визија</b> </p>
            </div>
            <div class="col-12 col-md-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti illum dolorem libero omnis minima eum
                    magnam aut enim dicta tenetur et, fuga assumenda sunt iure possimus consequuntur? Suscipit, fugit illum.
                </p>
            </div>
        </div>
    </div>
    <hr class="my-4" style="border: 1px solid #000;">
    <div class="container">
        <div class="row justify-content-center align-items-center"">
            <div class="col-12 col-md-4 red">
                <p class="ms-5 fs-5"><b>Нашите вредности</b> </p>
            </div>
            <div class="col-12 col-md-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Unde quia, itaque natus deserunt, incidunt fuga fugiat recusandae delectus molestias
                    laborum eligendi! Molestias tenetur deleniti itaque, quasi corrupti cumque laborum a!Deleniti illum
                    dolorem libero omnis minima eum magnam aut enim dicta tenetur et, fuga assumenda sunt iure possimus
                    consequuntur? Suscipit, fugit illum.</p>
            </div>
        </div>
    </div>
    </div>
    <hr class="my-4" style="border: 1px solid #000;">
    <br>
    <div class="container pt-5">
        <h3>Најчесто поставувани прашања</h3>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="accordion-item rounded-5">
                <h2 class="accordion-header">
                    <button
                        class="btn w-100 text-start toggle-btn d-flex justify-content-between align-items-center collapsed"
                        type="button" onclick="toggleAccordion(this)">
                        <span>01 Lorem question?</span>
                        <span class="plus-circle d-flex justify-content-center align-items-center">+</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, praesentium?
                    </div>
                </div>
            </div>
            <!-- item 2 -->
            <br>
            <div class="accordion-item rounded-5">
                <h2 class="accordion-header">
                    <button
                        class="btn w-100 text-start toggle-btn d-flex justify-content-between align-items-center collapsed"
                        type="button" onclick="toggleAccordion(this)">
                        <span>02 Lorem question?</span>
                        <span class="plus-circle d-flex justify-content-center align-items-center"><span
                                class="centered">+</span></span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, praesentium?
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="accordion-item rounded-5">
            <h2 class="accordion-header">
                <button class="btn w-100 text-start toggle-btn d-flex justify-content-between align-items-center collapsed"
                    type="button" onclick="toggleAccordion(this)">
                    <span>03 Lorem question?</span>
                    <span class="plus-circle d-flex justify-content-center align-items-center">+</span>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, praesentium?
                </div>
            </div>
        </div>
        <br>
        <div class="accordion-item rounded-5">
            <h2 class="accordion-header">
                <button class="btn w-100 text-start toggle-btn d-flex justify-content-between align-items-center collapsed"
                    type="button" onclick="toggleAccordion(this)">
                    <span>04 Lorem question?</span>
                    <span class="plus-circle d-flex justify-content-center align-items-center">+</span>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, praesentium?
                </div>
            </div>
        </div>
        <br>
        <div class="accordion-item rounded-5">
            <h2 class="accordion-header">
                <button class="btn w-100 text-start toggle-btn d-flex justify-content-between align-items-center collapsed"
                    type="button" onclick="toggleAccordion(this)">
                    <span>05 Lorem question?</span>
                    <span class="plus-circle d-flex justify-content-center align-items-center">+</span>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, praesentium?
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script>
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', function() {
                const collapse = this.nextElementSibling;
                const isOpen = collapse.classList.toggle('show');

                if (isOpen) {
                    header.style.backgroundColor = '#f3e5f5';
                    header.querySelector('.plus-circle').textContent = '-';
                    header.querySelector('.plus-circle').classList.add('minus');
                } else {
                    header.style.backgroundColor = 'white';
                    header.querySelector('.plus-circle').textContent = '+';
                    header.querySelector('.plus-circle').classList.remove('minus');
                }
            });
        });
    </script>
@endsection
