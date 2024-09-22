<!-- resources/views/projects/proekti.blade.php -->
@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4 p-5">Проекти</h1>
        <div class="mb-5">
            <h2 class="mb-3">Тековни проекти</h2>
            <div class="row text-center">
                @foreach($tekovni as $project)
                    <div class="col-12 col-md-6 mb-4">
                        <a href="{{ route('projects.show', $project->id) }}" class="text-decoration-none">
                            <div class="card h-100 project-card bg-warning text-dark rounded-5">
                                <!-- Project Title Section -->
                                <div class="card-title p-3" style="height: 20%;">
                                    <h5 class="mb-0">{{ $project->title }}</h5>
                                </div>
                                <!-- Project Image Section -->
                                <div class="card-img">
                                    <img src="{{ asset($project->img_main) }}" alt="{{ $project->title }}" class="img-fluid rounded-bottom-only">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Zavrsheni Projects Section -->
        <div>
            <h2 class="mb-3">Завршени Проекти</h2>
            <div class="row text-center">
                @foreach($zavrsheni as $project)
                    <div class="col-12 col-md-6 mb-4">
                        <a href="{{ route('projects.show', $project->id) }}" class="text-decoration-none">
                            <div class="card h-100 bg-warning text-dark project-card rounded-5">
                                <!-- Project Title Section -->
                                <div class="card-title p-3" style="height: 20%;">
                                    <h5 class="mb-0">{{ $project->title }}</h5>
                                </div>
                                <!-- Project Image Section -->
                                <div class="card-img">
                                    <img src="{{ asset($project->img_main) }}" alt="{{ $project->title }}" class="img-fluid rounded-bottom-only">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
