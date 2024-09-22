@extends('layout.main')

@section('title', 'Донирај')

@section('content')
<div class="container donate">
    <div class="row">
        <h1 class="font_headings fw-bold text-center my-5">Донирај!</h1>
        <div class="container">
            <div class="row">
                <div class="tab-container">
                    <div class="tab active font_text fw-bold" onclick="showContent('individual', this)">Индивидуалец</div>
                    <div class="tab font_text fw-bold" onclick="showContent('corporate', this)">Организација/Претпријатие</div>
                </div>
            </div>
        </div>

        <div id="individual" class="mt-5 tab-content active">
            <div class="box border shadow rounded-5 mt-5 p-5">
                <div class="container">
                    <div class="row">
                        <h5 class="font_text ">Lorem ipsum dolor sit amet consectetur.</h5>
                        <div class="row align-items-end">
                            <div class="col-3">
                                <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black amount-btn"
                                    value="1" onclick="toggleActive(this, 'interestInput')">1000 Ден</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black amount-btn"
                                    value="2" onclick="toggleActive(this, 'interestInput')">3000 Ден</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black amount-btn"
                                    value="3" onclick="toggleActive(this, 'interestInput')">6000 Ден</button>
                            </div>
                            <div class="col-3">
                                <label for="currency" class="form-label">Промени Валута:</label>
                                <select id="currency" name="currency" class="form-select btn rounded-pill w-100 p-3 mt-1 border-black" onchange="updateAmounts()">
                                    <option value="MKD">MKD (Macedonian Denar)</option>
                                    <option value="USD">USD (US Dollar)</option>
                                    <option value="EUR">EUR (Euro)</option>
                                    <option value="GBP">GBP (British Pound)</option>
                                </select>
                            </div>
                            <p class="font_text my-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Accusantium,
                                accusamus provident
                                beatae porro at odio consequatur assumenda fugiat, dolore aliquam corrupti. Quam
                                obcaecati
                                doloremque rem sapiente temporibus sunt enim totam?</p>
                        </div>

                        <label for="iznos">Друг износ:</label>
                        <input type="text" name="value" class="w-25 rounded-pill border-black p-3 mt-2"
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
                        <label for="name" class="mt-3 mx-2 font_text fw-bold">Име на Донатор*</label>
                        <input type="text" value="{{ old('name') }}" name="name" placeholder="Your Name"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="name" required>

                        <label for="email" class="mt-3 mx-2 font_text fw-bold">Email*</label>
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="example@email.com"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="email" required>

                        <label for="phone" class="mt-3 mx-2 font_text fw-bold">Телефонски Број*</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+389********"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="phone" required>

                        <label for="address" class="mt-3 mx-2 font_text fw-bold">Сума за донирање*</label>
                        <input type="text" value="{{ old('address') }}" name="address" placeholder="Donation Amount"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="address" required>


                    </div>
                    <div class="col">
                        <label for="card_num" class="mt-3 mx-2 font_text fw-bold">Број на картичка*</label>
                        <input type="text" value="{{ old('card_num') }}" name="card_num" placeholder="**** **** **** ****"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="card_num" required>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" id="expiry" name="expiry" placeholder="MM/YY"
                                    class="w-100 rounded-pill border-black p-3 mt-5" maxlength="5" required>
                            </div>
                            <div class="col-6">
                                <input type="text" id="cvv" name="cvv" placeholder="CVV"
                                    class="w-100 rounded-pill border-black p-3 mt-5" maxlength="3" required>
                            </div>
                        </div>

                        <label for="text" class="mt-3 mx-2 font_text fw-bold">Име на сопственик*</label>
                        <input type="text" name="name" placeholder="Card Owner" class="w-100 rounded-pill border-black p-3 mb-3" required>

                        <input type="submit" name="name" value="Донирај"
                            class="w-100 rounded-pill text-white bg-warning p-3 mt-4 fs-5">

                    </div>

                </div>
                <!-- <div class="col-6 offset-3 text-center">
                    <button type="submit" class="btn rounded-pill text-white submit font_headings">Пријави
                        Се</button>
                </div> -->
            </form>
        </div>

        <div id="corporate" class="mt-5 tab-content">
            <div class="box border shadow rounded-5 mt-5 p-5">
                <div class="container">
                    <div class="row">
                        <h5 class="font_text ">Lorem ipsum dolor sit amet consectetur.</h5>
                        <div class="row align-items-end">
                            <div class="col-3">
                                <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black amount-btn"
                                    value="1" onclick="toggleActive(this, 'interestInput')">1000 Ден</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black amount-btn"
                                    value="2" onclick="toggleActive(this, 'interestInput')">3000 Ден</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn rounded-pill w-100 p-3 mt-1 border-black amount-btn"
                                    value="3" onclick="toggleActive(this, 'interestInput')">6000 Ден</button>
                            </div>
                            <div class="col-3">
                                <label for="currency" class="form-label">Промени Валута:</label>
                                <select id="currency" name="currency" class="form-select btn rounded-pill w-100 p-3 mt-1 border-black" onchange="updateAmounts()">
                                    <option value="MKD">MKD (Macedonian Denar)</option>
                                    <option value="USD">USD (US Dollar)</option>
                                    <option value="EUR">EUR (Euro)</option>
                                    <option value="GBP">GBP (British Pound)</option>
                                </select>
                            </div>
                            <p class="font_text my-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Accusantium,
                                accusamus provident
                                beatae porro at odio consequatur assumenda fugiat, dolore aliquam corrupti. Quam
                                obcaecati
                                doloremque rem sapiente temporibus sunt enim totam?</p>
                        </div>

                        <label for="iznos">Друг износ:</label>
                        <input type="text" name="value" class="w-25 rounded-pill border-black p-3 mt-2"
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
                        <label for="name" class="mt-3 mx-2 font_text fw-bold">Име на Донатор*</label>
                        <input type="text" value="{{ old('name') }}" name="name" placeholder="Your Name"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="name" required>

                        <label for="email" class="mt-3 mx-2 font_text fw-bold">Email*</label>
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="example@email.com"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="email" required>

                        <label for="phone" class="mt-3 mx-2 font_text fw-bold">Телефонски Број*</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+389********"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="phone" required>

                        <label for="address" class="mt-3 mx-2 font_text fw-bold">Сума за донирање*</label>
                        <input type="text" value="{{ old('address') }}" name="address" placeholder="Donation Amount"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="address" required>


                    </div>
                    <div class="col">
                        <label for="card_num" class="mt-3 mx-2 font_text fw-bold">Број на картичка*</label>
                        <input type="text" value="{{ old('card_num') }}" name="card_num" placeholder="**** **** **** ****"
                            class="w-100 rounded-pill border-black p-3 mt-1" id="card_num" required>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" id="expiry" name="expiry" placeholder="MM/YY"
                                    class="w-100 rounded-pill border-black p-3 mt-5" maxlength="5" required>
                            </div>
                            <div class="col-6">
                                <input type="text" id="cvv" name="cvv" placeholder="CVV"
                                    class="w-100 rounded-pill border-black p-3 mt-5" maxlength="3" required>
                            </div>
                        </div>

                        <label for="text" class="mt-3 mx-2 font_text fw-bold">Име на сопственик*</label>
                        <input type="text" name="name" placeholder="Card Owner" class="w-100 rounded-pill border-black p-3 mb-3" required>

                        <input type="submit" name="name" value="Донирај"
                            class="w-100 rounded-pill text-white bg-warning p-3 mt-4 fs-5">

                    </div>

                </div>
                <!-- <div class="col-6 offset-3 text-center">
                    <button type="submit" class="btn rounded-pill text-white submit font_headings">Пријави
                        Се</button>
                </div> -->
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

    function updateAmounts() {
        let currencySelect = document.getElementById('currency');
        let selectedCurrency = currencySelect.value;

        let fixedAmounts = {
            'MKD': [1000, 3000, 6000],
            'EUR': [20, 50, 100],
            'USD': [20, 50, 100],
            'GBP': [20, 50, 100]
        };

        let buttons = document.querySelectorAll('.amount-btn');
        let amounts = fixedAmounts[selectedCurrency];

        buttons.forEach((button, index) => {
            button.innerHTML = `${amounts[index]} ${selectedCurrency}`;
            button.value = amounts[index];
        });
    }

    document.getElementById('expiry').addEventListener('input', function(e) {
        let input = e.target.value.replace(/[^0-9]/g, '');
        if (input.length >= 3) {
            input = input.slice(0, 2) + '/' + input.slice(2);
        }
        e.target.value = input.slice(0, 5);
    });

    document.getElementById('cvv').addEventListener('input', function(e) {
        let input = e.target.value.replace(/[^0-9]/g, '');
        e.target.value = input.slice(0, 3);
    });
</script>
@endsection