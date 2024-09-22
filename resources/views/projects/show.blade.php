@extends('layout.main')

@section('content')
    <div class="container project-details">
        <div class="rounded-5 text-center">
        <img src="{{ asset($project->img_main) }}" alt="{{ $project->title }}" class="pt-5 rounded-5 overflow-hidden">
        </div>
        <h1 class="text-center p-5">{{ $project->title }}</h1>
        <br>
        <p class="text-center p-5">{{ $project->description_1 }}</p>
        <br>
       
    <!-- Flexbox Row for Project Goal and Description 2 -->
    <div class="d-flex mt-4 border rounded-5" style="flex: 1; border: 9px solid black;">
        <div class="black-box d-flex align-items-start justify-content-start text-white p-4">
           <b>Цел на <br> Проектот</b>
        </div>
        <div class="p-5">
            {{ $project->description_2 }}
        </div>
    </div>

    <!-- Question Section -->
    <div class="row mt-4">
        <div class="col-8">
            <div class="border rounded-5 p-5" style="border: 2px solid black;">
            <h3 style="font-size: 2.5rem;"><b>За кого е наменет
            <br> овој проект?</b></h3>
            <br>
                <p>{{ $project->description_3 }}</p>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-center">
            <img src="{{ $project->img2 }}" alt="Additional Image" class="img-fluid rounded-5" style="border: 2px solid black; width: 100%; height: auto;">
        </div>
    </div>
</div>

@endsection
