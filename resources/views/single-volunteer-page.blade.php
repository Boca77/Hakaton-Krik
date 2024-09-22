@extends('layout.main')

@section('content')
    <section>
        <div class="container p-5 pb-0">
            <div class="row border bottom-5 rounded-5 border-black">
                <div class="col-4 ps-0">
                    <img src="{{ asset($volunteer->image) }}" alt="{{ $volunteer->name }}" class="w-100 rounded-5">
                </div>
                <div class="col-8 d-flex align-items-center">
                    <div>
                        <h1 class="h3 font_headings fw-bold">{{ $volunteer->name }} {{ $volunteer->last_name }}</h1>
                        <p class="font_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet amet fugiat
                            corporis
                            earum
                            inventore, quas pariatur repellat laborum culpa dolor molestiae dolores velit obcaecati deleniti
                            doloribus suscipit numquam, vero modi dolorum odio enim! Reiciendis ullam repellat doloremque
                            suscipit possimus commodi tenetur temporibus. Eum eligendi repellat quasi aliquid et nemo
                            commodi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row pt-5">
                <h1 class='pt-5'>Проекти во кои учествува</h1>
            </div>
            <div class="row">
                <div class="d-flex flex-row flex-nowrap col-12 news">
                    <!-- Post 1 -->
                    @foreach ($projects as $project)
                        <div class="post m-3 p-0 rounded-5"
                            style="background-image: url('{{ asset($project->image) }}'); white-space: wrap;">
                            <div class="content">
                                <div class="container post_body bg-black rounded-bottom-5"
                                    style="--bs-bg-opacity: .5; max-width: 100%">
                                    <div class="row">
                                        <div class="col bg-warning rounded-pill mt-2 ms-2 post_title">
                                            <p class="font_text p-1 text-center mb-0">{{ $project->title }}</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="mb-0 font_text text-white mt-2">
                                                <i class="fa-regular fa-calendar-days text-white"></i>
                                                {{ $project->date_from }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="mb-0 mt-4 text-white font_text">{{ $project->description }}</p>
                                    </div>
                                    <div class="row">
                                        <a href="#" class="mb-2 mt-4 text-white font_text">
                                            Види Повеќе <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
