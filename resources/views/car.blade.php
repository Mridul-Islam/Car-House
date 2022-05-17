@extends('layouts.app')

@section('content')

    <!-- Header-->
    <header class="bg-dark">
        <div class="container px-4 py-3 px-lg-5 mt-4">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Car House</h1>
                <p class="lead fw-normal text-white-50 mb-0">With Your Dream Car</p>
            </div>
        </div>
    </header>


    <div class="container-fluid py-4">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ asset("images/" . $car->image->name) }}" class="card-img" alt="">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title text-center" style="color: #30336b; font-weight: bolder;">{{ $car->model_name }}</h2>
                        <hr>
                        <h4 style="color: #30336b; font-weight: bolder;">BDT: {{ $car->price }}</h4>
                        <p class="card-text">{{ $car->description }}</p>
                        <h4 style="color: #30336b; font-weight: bolder;">Features:</h4>
                        <ul>
                            <li><b>Engine type:</b> {{ $car->engine_type }}</li>
                            <li><b>Color:</b>       {{ $car->color }}</li>
                            <li><b>No Of Seats:</b> {{ $car->noOfSeats }}</li>
                            <li><b>Mileage:</b>     {{ $car->mileage }}</li>
                            <li><b>Fuel type:</b>   {{ $car->fuel_type }}</li>
                            <li><b>Gear Type:</b>   {{ $car->gear_type }}</li>
                        </ul>
                        <button class="btn btn-outline-primary">Add to Cart</button>
                        <button class="btn btn-outline-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
