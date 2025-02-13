@extends('layout.app')
@section('title', 'Show Products')
@section('content')


    <div class="container">


        <h1 class="mt-5">Show Product</h1>

        <div class="mb-3">
            <b>ID:</b> {{ $product->id }}
        </div>

        <div class="mb-3">
            <b>Name:</b> {{ $product->name }}
        </div>

        <div class="mb-3">
            <b>Price:</b> {{ $product->price }}
        </div >

        <div class="mb-3">
            <b>Description:</b> {{ $product->description }}
        </div>

        <div class="mb-3">
            <b>Created At</b> {{ $product->created_at }}
        </div>

        <div class="mb-3">
            <b>Updated at</b> {{ $product->update }}
        </div>

                <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                      </svg>  Back
                </a>

    </div>
@endsection
