@extends('layout.main')

@section('title', 'Услуги')

@section('content')
<div class="container pt-5">
    <div class="tab-container">
        <div class="tab active" onclick="showContent('godishen', this)">Годишен Извештај</div>
        <div class="tab" onclick="showContent('finansiski', this)">Финансиски Извештај</div>
        <div class="tab" onclick="showContent('politicki', this)">Политички Документи</div>
    </div>

    <div class="content pt-5">
    <div id="godishen" class="tab-content active">
        <h3>2023 година</h3>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i> 
                    </a>
                </div>
            </div>
    </div>
    <br>
    <div class="container mt-3 text-end p-3" style="position: relative;">
        <a href="" class="button blue-button rounded-5" style="position: absolute; right: 0; bottom: 0;">Види за Цел
            Месец</a>
        </div>
        <br><br>
        <h3>2022 година</h3>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i> 
                    </a>
                </div>
            </div>
        </div>
        <br>
    <div class="container mt-3 text-end p-3" style="position: relative;">
        <a href="" class="button blue-button rounded-5" style="position: absolute; right: 0; bottom: 0;">Види за Цел
            Месец</a>
        </div>
        <br><br>
        <h3>2021 година</h3>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i> 
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="container mt-3 text-end p-3" style="position: relative;">
        <a href="" class="button blue-button rounded-5" style="position: absolute; right: 0; bottom: 0;">Види за Цел
            Месец</a>
        </div>
    </div>
</div>
<br>
   


        <div id="finansiski" class="tab-content">
            <h2>Финансиски Извештај</h2>
            <br>
            <p>Description for Финансиски Извештај... Lorem ipsum dolor sit amet, consectetur adipisic Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quaerat nemo nihil officiis perferendis dolorem molestias. Nostrum ex quas omnis expedita, molestiae voluptatem sunt corporis similique possimus quod! Perspiciatis, ad? ing elit...</p>
        </div>
        <div id="politicki" class="tab-content">
        <h3>2023 година</h3>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card position-relative rounded-5">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <br>
                    </div>
                    <a href="#" class="btn btn-dark position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fa-solid fa-download"></i> 
                    </a>
                </div>
            </div>
        </div>
        <br><br>
            <div class="container mt-3 text-end p-3" style="position: relative;">
        <a href="" class="button blue-button rounded-5" style="position: absolute; right: 0; bottom: 0;">Види за Цел
            Месец</a>
        </div>
    </div>
    </div>
    
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
