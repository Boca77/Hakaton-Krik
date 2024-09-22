@extends('layout.main')

@section('content')
<div class="container">
    <!-- First Section: Display two rows of random product images -->
    <br><br><br><br>
    <div class="row pt-5 g-4">  <!-- Use Bootstrap's g-4 for consistent gap between columns -->
        @foreach($products->random(6) as $product)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div>
                    <!-- Make the image clickable and link to the single product page -->
                    <a href="{{ route('products.show', $product->id) }}">
                        <img src="{{ $product->image }}" class="card-img-top rounded-5" alt="{{ $product->name }}" style="height: 240px; object-fit: cover;">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <br><br>

    <!-- Second Section: Product Cards with "Buy" and "Favourite" buttons -->
    <div class="row mt-5 g-4">  <!-- Use g-4 to ensure proper spacing between cards -->
        @foreach($products as $product)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card  animate rounded-5" style="; height: 100%; position: relative;"> <!-- Make sure all cards have equal height and set relative positioning -->
                    
                    <!-- Make the product image clickable -->
                    <a href="{{ route('products.show', $product->id) }}">
                        <img src="{{ $product->image }}" class="card-img-top rounded-5" alt="{{ $product->name }}" style="height: 220px; object-fit: cover;">
                    </a>

                    <!-- Product Name -->
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                    </div>
                    <br>

                    <div class="text-center" style="position: absolute; bottom: -19px; width: 100%;">
                        <div class="d-flex justify-content-center align-items-center">
                            <!-- Buy Button -->
                            <form action="{{ route('products.buy', $product->id) }}" method="POST" class="me-2">  <!-- Add margin-right (me-2) for spacing -->
                                @csrf
                                <button type="submit" class="btn btn-danger">Buy</button>
                            </form>

                            <!-- Add to Favourite Button with Circular Border and Black Heart -->
                            <button class="btn favourite-btn" 
                            style="border: 2px solid black; border-radius: 50%; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; background-color: white;">
                                <i class="fas fa-heart" style="color: black;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Include FontAwesome and Custom Script -->
<script>
        // Handle Favourite button click event to just change background color
        document.querySelectorAll('.favourite-btn').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();  // Prevent form submission

                let icon = this.querySelector('i');

                // Toggle background color and icon color
                if (icon.classList.contains('favourite-selected')) {
                    icon.classList.remove('favourite-selected');
                    this.style.backgroundColor = 'white';  // Revert to default
                    icon.style.color = 'black';  // Revert to black heart
                } else {
                    icon.classList.add('favourite-selected');
                    this.style.backgroundColor = 'yellow';  // Change to yellow background
                    icon.style.color = 'red';  // Change heart to red
                }
            });
        });
</script>
@endsection
