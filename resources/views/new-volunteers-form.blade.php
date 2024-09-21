@extends('layout.main')

@section('title', 'Волонтирај Сега')

@section('content')
    <section class="volunteers-form">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="font_headings fw-bold text-center mt-5 pt-5">Волонтирај Сега!</h1>
                <form action="{{ route('volunteer.store') }}" method="POST" class="mt-5 rounded-5 form">
                    @csrf
                    <div class="row g-3 ">
                        <div class="col">
                            <label for="name" class="mt-3 mx-2 font_text fw-bold">Име на Волонтер*</label>
                            <input type="text" value="{{ old('name') }}" name="name"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="name"
                                placeholder="Example Namigton">

                            <label for="address" class="mt-3 mx-2 font_text fw-bold">Адреса*</label>
                            <input type="text" value="{{ old('address') }}" name="address"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="address"
                                placeholder="Example Street 24">

                            <label for="phone" class="mt-3 mx-2 font_text fw-bold">Телефонски Број*</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="phone" placeholder="+38900000">

                            <label for="email" class="mt-3 mx-2 font_text fw-bold">Email*</label>
                            <input type="email" value="{{ old('email') }}" name="email"
                                class="w-100 rounded-pill border-black p-3 mt-1" id="email"
                                placeholder="example@email.com">

                        </div>
                        <div class="col">
                            <label class="mt-3 mx-2 font_text fw-bold">Возраст*</label><br>

                            {{-- !-- Hidden input that gets the value from the set of buttons --> --}}
                            <input type="hidden" name="is-over-18" value="{{ old('is-over-18') }}" id="ageInput"
                                value="">

                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="0" onclick="toggleActive(this, 'ageInput')">Под 18 години</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                        value="1" onclick="toggleActive(this, 'ageInput')">Над 18 години</button><br>
                                </div>
                            </div>

                            <div class="range">
                                <div class="range-slider">
                                    <label for="address" class="mt-4 mx-2 font_text fw-bold">Искуство со
                                        Волонтирање*</label><br>
                                    <input type="range" min="1" max="10" name="experience"
                                        class="range-input mt-2" value="{{ old('experience') }}" id="address"
                                        step="1" />
                                    <div class="sliderticks d-flex justify-content-between ms-1">
                                        <span>1</span>
                                        <span>2</span>
                                        <span>3</span>
                                        <span>4</span>
                                        <span>5</span>
                                        <span>6</span>
                                        <span>7</span>
                                        <span>8</span>
                                        <span>9</span>
                                        <span>10</span>
                                    </div>
                                </div>

                                <label for="name" class="mt-4 mx-2 font_text fw-bold">Интереси*</label><br>

                                {{-- !-- Hidden input that gets the value from the set of buttons --> --}}
                                <input type="hidden" name="interests" value="{{ old('interests') }}" id="interestInput"
                                    value="">

                                <div class="row mt-2">
                                    <div class="col-6">
                                        <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                            value="1" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                            sit amet.</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                            value="2" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                            sit amet.</button><br>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                            value="3" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                            sit amet.</button>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black"
                                            value="4" onclick="toggleActive(this, 'interestInput')">Lorem ipsum dolor
                                            sit amet.</button><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 offset-3 text-center">
                        <button type="submit" class="btn rounded-pill text-white submit font_headings">Пријави
                            Се</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        function toggleActive(button, inputId) {
            const buttons = button.closest('.row').querySelectorAll('.btn');
            buttons.forEach(btn => btn.classList.remove('active', 'btn-primary'));

            button.classList.add('active', 'btn-primary');

            document.getElementById(inputId).value = button.value;
        }
    </script>
@endsection
