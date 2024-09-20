<nav>
    {{-- Top nav --}}
    <div class="w-100 bg-black nav_shadow">
        <div class="container py-2">
            <div class="row align-items-center">
                <div class="col-2">
                    <a href=""
                        class="h3 font_headings text-decoration-none h3 fw-bold text-white mb-0 d-inline">NEWSLETTER</a>
                </div>
                <div class="col-8">
                    <input type="text" class="rounded-pill p-2 font_text border-8 text-white border-white bg-black"
                        name="" id="" value="Search">
                </div>
                <div class="col-1">
                    <p class="mb-0 font_text text-white">En/Mkd</p>
                </div>
                <div class="col-1">
                    <a href="" class="text-white font_text text-decoration-none">E-shop</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom nav --}}
    <div class="w-100 orange">
        <div class="container py-1">
            <div class="row">
                <div class="col-7">
                    <a href="">
                        <img style="width: 80px" src="{{ asset('images/logos/Крик-лого.png') }}" alt="Krik logo"></a>
                </div>
                <div class="col-5 d-flex align-items-center">
                    <ul class="h5 d-flex w-100 font_text fw-bold nav justify-content-between">
                        <li class="nav-item p-2 align-self-center hover_border position-relative" id="dropdown">
                            <a class="text-black text-decoration-none" id="navItem">
                                За нас
                                <span class="d-none" id="arrow">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </a>
                            <div class="position-absolute p-2 w-100 d-none dropdown_active dropdown_body"
                                id="dropdown-content">
                                <ul class="drop_list">
                                    <li><a href="">За Крик</a></li>
                                    <li><a href="">Нашиот Тим</a></li>
                                    <li><a href="">Волонтери</a></li>
                                    <li><a href="">Архива</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item p-2 align-self-center hover_border">
                            <a href="" class="text-black text-decoration-none ">Услуги</a>
                        </li>
                        <li class="nav-item p-2 align-self-center hover_border">
                            <a href="" class="text-black text-decoration-none ">Проекти</a>
                        </li>
                        <li class="nav-item p-2 align-self-center hover_border">
                            <a href="" class="text-black text-decoration-none ">Кнтакт</a>
                        </li>
                        <li class="nav-item fw-normal align-self-center p-2">
                            <a href="">
                                <button class="pushable">
                                    <span class="front">
                                        Донирај
                                    </span>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
