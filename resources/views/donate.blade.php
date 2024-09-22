@extends('layout.main')

@section('content')
    <div class="container donate">
        <div class="row">
            <h1 class="font_headings fw-bold text-center mb-5">Донирај!</h1>
            <div class="container">
                <div class="row">
                    <div class="tab-container">
                        <div class="tab active font_text fw-bold" onclick="showContent('individual', this)">Долг Рок</div>
                        <div class="tab font_text fw-bold" onclick="showContent('corporate', this)">Краток рок</div>
                    </div>
                </div>
            </div>

            <div id="individual" class="mt-5 tab-content active">
                <div class="box rounded-5 p-5">
                    <div class="container">
                        <div class="row">
                            <h5 class="font_text ">Lorem ipsum dolor sit amet.</h5>
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="1" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="2" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button><br>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="3" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="4" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button><br>
                                </div>
                                <p class="font_text mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Accusantium,
                                    accusamus provident
                                    beatae porro at odio consequatur assumenda fugiat, dolore aliquam corrupti. Quam
                                    obcaecati
                                    doloremque rem sapiente temporibus sunt enim totam?</p>
                            </div>

                            <label for="iznos">Друг износ:</label>
                            <input type="text" name="value" class="w-25 rounded-pill border-black p-3 mt-1"
                                id="iznos">

                            <div class="row mt-5">
                                <div class="col-3">
                                    <button type="button"
                                        class="btn rounded-pill w-100 p-3 mt-1 bg-black text-white fw-bold font_text">Донирај
                                        со картица</button>
                                </div>
                                <div class="col-3">
                                    <button type="button"
                                        class="btn rounded-pill w-100 p-3 mt-1 bg-warning fw-bold font_text">PayPal</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <form action="{{ route('volunteer.store') }}" method="POST" class="mt-5 rounded-5 form">
                    @csrf
                    <div class="row g-3 ">
                        <div class="col">
                            <label for="name" class="mt-3 mx-2 font_text fw-bold">Име на Донор*</label>
                            <input type="text" value="{{ old('name') }}" name="name"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="name">

                            <label for="email" class="mt-3 mx-2 font_text fw-bold">Email*</label>
                            <input type="email" value="{{ old('email') }}" name="email"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="email">

                            <label for="phone" class="mt-3 mx-2 font_text fw-bold">Телефонски Број*</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="phone">

                            <label for="address" class="mt-3 mx-2 font_text fw-bold">Сума за донирање*</label>
                            <input type="text" value="{{ old('address') }}" name="address"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="address">


                        </div>
                        <div class="col">
                            <label for="card_num" class="mt-3 mx-2 font_text fw-bold">Број на картица*</label>
                            <input type="text" value="{{ old('card_num') }}" name="card_num"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="card_num">

                            <div class="row">
                                <div class="col-6"><input type="text" value="{{ old('address') }}" name="address"
                                        class="w-100 rounded-pill border-black p-3 mt-5" id="address">
                                </div>
                                <div class="col-6">
                                    <input type="text" value="{{ old('address') }}" name="address"
                                        class="w-100 rounded-pill border-black p-3 mt-5" id="address">
                                </div>
                            </div>

                            <label for="text" class="mt-3 mx-2 font_text fw-bold">Име на сопственик</label>
                            <input type="text" name="name" class="w-100 rounded-pill border-black p-3"
                                id="phone">

                            <input type="submit" name="name" value="Донирај"
                                class="w-100 rounded-pill text-white bg-warning  p-3 mt-5" id="phone">

                        </div>

                    </div>
                    <div class="col-6 offset-3 text-center">
                        <button type="submit" class="btn rounded-pill text-white submit font_headings">Пријави
                            Се</button>
                    </div>
                </form>
            </div>

            <div id="corporate" class="mt-5 tab-content">
                <div class="box rounded-5 p-5">
                    <div class="container">
                        <div class="row">
                            <h5 class="font_text ">Lorem ipsum dolor sit amet.</h5>
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="1" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="2" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button><br>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="3" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="4" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                        sit amet.</button><br>
                                </div>
                                <p class="font_text mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Accusantium,
                                    accusamus provident
                                    beatae porro at odio consequatur assumenda fugiat, dolore aliquam corrupti. Quam
                                    obcaecati
                                    doloremque rem sapiente temporibus sunt enim totam?</p>
                            </div>

                            <label for="iznos">Друг износ:</label>
                            <input type="text" name="value" class="w-25 rounded-pill border-black p-3 mt-1"
                                id="iznos">

                            <div class="row mt-5">
                                <div class="col-3">
                                    <button type="button"
                                        class="btn rounded-pill w-100 p-3 mt-1 bg-black text-white fw-bold font_text">Донирај
                                        со картица</button>
                                </div>
                                <div class="col-3">
                                    <button type="button"
                                        class="btn rounded-pill w-100 p-3 mt-1 bg-warning fw-bold font_text">PayPal</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <form action="{{ route('volunteer.store') }}" method="POST" class="mt-5 rounded-5 form">
                    @csrf
                    <div class="row g-3 ">
                        <div class="col">
                            <label for="name" class="mt-3 mx-2 font_text fw-bold">Име на Донор*</label>
                            <input type="text" value="{{ old('name') }}" name="name"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="name">

                            <label for="email" class="mt-3 mx-2 font_text fw-bold">Email*</label>
                            <input type="email" value="{{ old('email') }}" name="email"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="email">

                            <label for="phone" class="mt-3 mx-2 font_text fw-bold">Телефонски Број*</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="phone">

                            <label for="address" class="mt-3 mx-2 font_text fw-bold">Сума за донирање*</label>
                            <input type="text" value="{{ old('address') }}" name="address"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="address">


                        </div>
                        <div class="col">
                            <label for="card_num" class="mt-3 mx-2 font_text fw-bold">Број на картица*</label>
                            <input type="text" value="{{ old('card_num') }}" name="card_num"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="card_num">

                            <div class="row">
                                <div class="col-6"><input type="text" value="{{ old('address') }}" name="address"
                                        class="w-100 rounded-pill border-black p-3 mt-5" id="address">
                                </div>
                                <div class="col-6">
                                    <input type="text" value="{{ old('address') }}" name="address"
                                        class="w-100 rounded-pill border-black p-3 mt-5" id="address">
                                </div>
                            </div>

                            <label for="text" class="mt-3 mx-2 font_text fw-bold">Име на сопственик</label>
                            <input type="text" name="name" class="w-100 rounded-pill border-black p-3"
                                id="phone">

                            <input type="submit" name="name" value="Донирај"
                                class="w-100 rounded-pill text-white bg-warning  p-3 mt-5" id="phone">

                        </div>

                    </div>
                    <div class="col-6 offset-3 text-center">
                        <button type="submit" class="btn rounded-pill text-white submit font_headings">Пријави
                            Се</button>
                    </div>
                </form>
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

        function toggleActive(button, inputId) {
            const buttons = button.closest('.row').querySelectorAll('.btn');
            buttons.forEach(btn => btn.classList.remove('active', 'btn-primary'));

            button.classList.add('active', 'btn-primary');

            document.getElementById(inputId).value = button.value;
        }
    </script>
@endsection
