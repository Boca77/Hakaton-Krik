@extends('layout.main')

@section('content')
    <section>
        <div class="container p-5 pb-0">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="w-100 rounded-5">
                </div>
                <div class="col-8 d-flex align-items-center">
                    <div>
                        <h1 class="h3 font_headings fw-bold">{{ $member->name }} {{ $member->last_name }}</h1>
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
    </section>
@endsection
