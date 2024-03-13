@extends('layouts.app')
@section('content')
    <section class="container">

        <h1 class="text-center text-capitalize text-white py-5">featured products</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5">
            @forelse($highlighted_products as $product)
                <div class="col">
                    @include('partials.product-card')
                </div>
            @empty
                <div class="col">
                    <div class="card">
                        No products available
                    </div>
                </div>
            @endforelse
        </div>
    </section>
@endsection
