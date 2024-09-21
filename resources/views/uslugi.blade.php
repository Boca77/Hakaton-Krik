@extends('layout.main')

@section('title', 'Услуги')

@section('content')
<div class="container pt-5">
    <div class="tab-container">
        <div class="tab active" onclick="showContent('centarKrikni', this)">Центар Крикни</div>
        <div class="tab" onclick="showContent('nezavisni', this)">Независни станбени единици</div>
        <div class="tab" onclick="showContent('sovetuvalishte', this)">Советувалиште</div>
    </div>

    <div class="content pt-5">
        <div id="centarKrikni" class="tab-content active">
            <h2>Центар Крикни</h2>
            <br>
            <p>Description for Centar Krikni... Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, odio nihil obcaecati quos nam, repellat recusandae porro accusamus saepe quae suscipit illum fugiat harum officiis totam neque non, natus dicta! elit...</p>
        </div>
        <div id="nezavisni" class="tab-content">
            <h2>Независни станбени единици</h2>
            <br>
            <p>Description for Независни станбени единици... Lorem ipsum dolor sit amet, consectetur adipisic Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quaerat nemo nihil officiis perferendis dolorem molestias. Nostrum ex quas omnis expedita, molestiae voluptatem sunt corporis similique possimus quod! Perspiciatis, ad? ing elit...</p>
        </div>
        <div id="sovetuvalishte" class="tab-content">
            <h2>Советувалиште</h2>
            <br>
            <p>Description for Советувалиште... Lorem ipsum dolor sit amet, consectetur adipisic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nobis maiores aliquam dolorum. Hic rerum eveniet unde, quaerat minus quisquam deleniti doloribus libero consectetur blanditiis obcaecati id possimus tenetur corporis. ing elit...</p>
        </div>
    </div>

    <h3 class="pt-5 pb-4">Галерија со активности</h3>
    <div class="row">
        <!-- First Row -->
        <div class="col-12 col-lg-4">
        <img src="{{ asset('images/uslugi/educational-activities.jpg') }}" alt="Image description" class="img-fluid rounded-5">
        </div>
        <div class="col-12 col-lg-8">
            <img src="{{ asset('images/uslugi/Team-building-activities-for-kids-Featured-Image.jpg') }}" alt="Image description" class="img-fluid rounded-5">
        </div>
    </div>

    <div class="row pt-3 pb-5">
        <!-- Second Row -->
        <div class="col-12 col-lg-4">
            <img src="{{ asset('images/uslugi/fun-indoor-activities-for-kids.jpg') }}" alt="Image description" class="img-fluid rounded-5">
        </div>
        <div class="col-12 col-lg-4">
            <img src="{{ asset('images/uslugi/educational-activities.jpg') }}" alt="Image description" class="img-fluid rounded-5">
        </div>
        <div class="col-12 col-lg-4">
            <img src="{{ asset('images/uslugi/Team-building-activities-for-kids-Featured-Image.jpg') }}" alt="Image description" class="img-fluid rounded-5">
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
</script>
@endsection
