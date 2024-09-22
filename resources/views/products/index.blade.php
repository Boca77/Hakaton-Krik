@extends('layout.main')

@section('content')
<div class="container">
    <br><br><br><br>
    <div class="row pt-5 g-4">  
        @foreach($products->random(6) as $product)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div>
                    <a href="{{ route('products.show', $product->id) }}">
                        <img src="{{ $product->image }}" class="card-img-top rounded-5" alt="{{ $product->name }}" style="height: 240px; object-fit: cover;">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <br><br>

    <!-- Second Section: Product Cards with "Buy" and "Favourite" buttons -->
    <div class="row mt-5 g-4">
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
                            <form action="{{ route('products.buy', $product->id) }}" method="POST" class="me-2">
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
<script>
        document.querySelectorAll('.favourite-btn').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                let icon = this.querySelector('i');

                if (icon.classList.contains('favourite-selected')) {
                    icon.classList.remove('favourite-selected');
                    this.style.backgroundColor = 'white'; 
                    icon.style.color = 'black';
                } else {
                    icon.classList.add('favourite-selected');
                    this.style.backgroundColor = 'yellow'; 
                    icon.style.color = 'red';
                }
            });
        });
</script>
@endsection
