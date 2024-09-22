<footer class="bg-black rounded-top-4" id="kontakt">

    {{-- Top part --}}
    <div class="container border-bottom border-white">
        <div class="row">
            <div class="col-3">
                <h2 class="text-white font_text">Месечен билтен</h2>
            </div>
            <div class="col-4">
                <p class="text-white top_footer_text ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                    cumque ut
                    necessitatibus reiciendis
                    consequatur unde veniam in excepturi, </p>
            </div>
            <div class="col-5">
                {{-- Contact form --}}
                <input type="email" class="text-white rounded-pill send_email bg-black border-4 border-white"
                    name="" id="" placeholder="Вашата Емаил Адреса">
                <button class="btn bg-warning rounded-pill send_email mt-5">CTA</button>
            </div>
        </div>
    </div>

    {{-- Bottom part  --}}
    <div class="container mt-5">
        <div class="row">
            {{-- Contact form --}}
            <div class="col-5 pe-0">
                <h3 class="text-white font_text">Контактирај Не!</h3>
                <input type="email" class="text-white rounded-pill mt-3 send_email bg-black border-4 border-white"
                    name="" id="" placeholder="Вашeто Име">
                <input type="email" class="text-white mt-3 rounded-pill send_email bg-black border-4 border-white"
                    name="" id="" placeholder="Вашата Емаил Адреса">
                <button class="btn bg-warning rounded-pill send_email mt-3">CTA</button>
            </div>
            <div class="col-4">
                <h3 class="text-white fotn_text">Приклучи Се!</h3>
                <p class="text-white mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia cumque ut
                    necessitatibus reiciendis
                    consequatur unde veniam in excepturi, </p>
            </div>
            <div class="col-3">
                <h3 class="text-white fotn_text">За Крик</h3>
                <p class="text-white mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia cumque ut
                    necessitatibus reiciendis
                    consequatur unde veniam in excepturi,
                </p>

                {{-- Social media links --}}
                <div class="container">
                    <div class="row">
                        <div class="col ps-0">
                            <a href="">
                                <img src="{{ asset('/images/logos/facebook-logo.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="{{ asset('/images/logos/twitter-logo.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="{{ asset('/images/logos/facebook-logo.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="{{ asset('/images/logos/twitter-logo.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>