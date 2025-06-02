@extends('user.layouts.app')
@section('title', 'Shop Page')

@section('content')
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($categories as $category)
                                <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>

                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center {{ $product->category->slug }}">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="{{ $product->image }}" alt=""></a>
                            </div>
                            <h3>{{ $product->name }}</h3>
                            <p class="product-price">
                                <span>{{ $product->quantity }}</span> {{ $product->price }} EGP
                            </p>
                            <a href="{{ route('cart_page') }}" class="cart-btn">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="pagination">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
@endsection
