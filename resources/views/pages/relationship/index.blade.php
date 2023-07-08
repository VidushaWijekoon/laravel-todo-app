@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="page_title text-center">Relationship Page</h1>
            @if (session('message'))
            <div class="alert alert-success">{{ session('message')}}</div>
            @endif
            @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                <div class="">{{ $error }}</div>
                @endforeach
            </div>
            @endif
            <div class="row justify-content-center">
                @forelse ($products as $product)
                <div class="col-md-4 mt-2 ">
                    <div class="card">
                        <div class="card-body bg-primary">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->intro }}</p>

                            <div class="row">
                                @foreach ($product->categories as $category)
                                <div class="col-md-12">
                                    <div class="card category-box">
                                        <h4>{{ $category->name }}</h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <span></span>
                @endforelse
            </div>
            {{-- <div class="row justify-content-center">
                @forelse ($products as $product)
                <div class="col-md-4 mt-2 ">
                    <div class="card">
                        <div class="card-body bg-primary">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->intro }}</p>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card category-box">
                                        <h4>{{ $product->category->name }}</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @empty
                <span></span>
                @endforelse
            </div> --}}
            {{-- <div class="row justify-content-center">
                @forelse ($categories as $category)
                <div class="col-md-4 mt-2 ">
                    <div class="card">
                        <div class="card-body bg-primary">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <div class="row">
                                @foreach ($category->products as $product)
                                <div class="col-md-4 mt-2">
                                    <div class="card category-box">
                                        <h6>{{ $product->name }}</h6>
                                        <h6>{{ $product->intro }}</h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <span></span>
                @endforelse
            </div> --}}

        </div>
    </div>
</div>
@endsection

@push('css')

<style>
    .page_title {
        padding-top: 10vh;
        font-size: 3rem;
        color: #59bf4b;
        font-weight: bold;
    }

    a {
        text-decoration: none;
    }
</style>

@endpush