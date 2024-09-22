@extends('layout.main')

@section('content')
<div class="container mt-5 pt-5">
    <!-- Product Details Section -->
    <div class="row">
        <div class="col-md-6">
            <!-- Product Image -->
            <img src="{{ $product->image }}" class="img-fluid rounded-5" alt="{{ $product->name }}" style="max-height: 400px; object-fit: cover;">
        </div>

        <div class="col-md-6">
            <!-- Product Name -->
            <h1>{{ $product->name }}</h1>

            <!-- Product Description -->
            <p class="mt-3">{{ $product->description }}</p>

            <!-- Product Price -->
            <h4 class="mt-4">Price: ${{ number_format($product->price, 2) }}</h4>

            <!-- Buy Button -->
            <form action="{{ route('products.buy', $product->id) }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg">Buy Now</button>
            </form>

            <!-- Add to Favourite Button -->
            <button class="btn favourite-btn mt-3" 
            style="border: 2px solid black; border-radius: 50%; width: 50px; height: 50px; display: flex; justify-content: center; align-items: center; background-color: white;">
                <i class="fas fa-heart" style="color: black; font-size: 24px;"></i>
            </button>
        </div>
    </div>
<script>
    document.querySelector('.favourite-btn').addEventListener('click', function(event) {
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
</script>
@endsection
