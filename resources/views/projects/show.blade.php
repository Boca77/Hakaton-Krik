@extends('layout.main')

@section('content')
    <div class="project-details container text-center">
        <br><br>
        <div class="rounded-5">
        <img src="{{ asset($project->img_main) }}" alt="{{ $project->title }}" class="pt-5 rounded-5 overflow-hidden">
        </div>
        <h1 class="pt-4">{{ $project->title }}</h1>
        <br>
        <p>{{ $project->description_1 }}</p>
        <br>
        <div class="row">
            <div class="col-4">Цел на Проектот</div>
            <div class="col-8">{{ $project->description_2 }}</div>
        </div>
        <br>
        <div class="row">
            <div class="col-8">
                <h3>За кого е наменет овој проект?</h3>
                <br>
                <p><strong>Description 3:</strong> {{ $project->description_3 }}</p>
            </div>
            <div class="col-4"><img src="{{ $project->img2 }}" alt="1212"></div>
        </div>
    </div>
@endsection
