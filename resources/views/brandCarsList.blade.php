@extends('layouts.app')

@section('content')

    <div class="justify-content-center">

        <!-- Header-->
        <header class="bg-dark">
            <div class="container px-4 px-lg-5 my-2">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" style="color: #aaaaaa">Car House</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With Your Dream Car</p>
                </div>
            </div>
        </header>

        <!-- Session values -->
        @if(Session::has('cart_added'))
            <h4 class="text-center text-info">{{ session('cart_added') }}</h4>
        @endif
        @if(Session::has('add_order'))
            <h4 class="text-center text-info">{{ session('add_order') }}</h4>
        @endif

        <!-- Section-->
        <section class="py-2">
            <div class="container px-3 px-lg-4 mt-4">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-2 justify-content-center">

                    @foreach($cars as $car)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <a href="{{ route('carDetail', $car->id) }}">
                                    <img class="img-thumbnail" src="{{ $car->image_id ? asset("images/" . $car->image->name) : '' }}" alt="Product_Image" style="width: 100%; height: 350px;"/>
                                </a>
                                <!-- Product details-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $car->model_name }}</h5>
                                        <!-- Product price-->
                                        {{ $car->price }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center mb-2">
                                        {!! Form::open(['method'=>'post', 'route'=>['add_cart', $car->id]]) !!}
                                        {!! Form::submit('Add to cart', ['class'=>'btn btn-outline-dark mt-auto']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="text-center">
                                        {!! Form::open(['method'=>'post', 'route'=>['add_order', $car->id]]) !!}
                                        {!! Form::submit('Buy Now', ['class'=>'btn btn-outline-dark mt-auto']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>
@endsection
