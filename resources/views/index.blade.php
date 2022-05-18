@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    <div class="justify-content-center">

        <!-- Header-->
        <header class="bg-dark">
            <div class="container px-4 px-lg-5 my-4">
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
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach($cars as $car)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <a href="{{ route('carDetail', $car->id) }}">
                                    <img class="card-img-top" src={{ asset("images/" . $car->image->name) }} alt="..." height="150px"/>
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


{{--                    <div class="col mb-5">--}}
{{--                        <div class="card h-100">--}}
{{--                            <!-- Sale badge-->--}}
{{--                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                            <!-- Product image-->--}}
{{--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                            <!-- Product details-->--}}
{{--                            <div class="card-body p-4">--}}
{{--                                <div class="text-center">--}}
{{--                                    <!-- Product name-->--}}
{{--                                    <h5 class="fw-bolder">Sale Item</h5>--}}
{{--                                    <!-- Product price-->--}}
{{--                                    <span class="text-muted text-decoration-line-through">$50.00</span>--}}
{{--                                    $25.00--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Product actions-->--}}
{{--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col mb-5">--}}
{{--                        <div class="card h-100">--}}
{{--                            <!-- Product image-->--}}
{{--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                            <!-- Product details-->--}}
{{--                            <div class="card-body p-4">--}}
{{--                                <div class="text-center">--}}
{{--                                    <!-- Product name-->--}}
{{--                                    <h5 class="fw-bolder">Popular Item</h5>--}}
{{--                                    <!-- Product reviews-->--}}
{{--                                    <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Product price-->--}}
{{--                                    $40.00--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Product actions-->--}}
{{--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col mb-5">--}}
{{--                        <div class="card h-100">--}}
{{--                            <!-- Sale badge-->--}}
{{--                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                            <!-- Product image-->--}}
{{--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                            <!-- Product details-->--}}
{{--                            <div class="card-body p-4">--}}
{{--                                <div class="text-center">--}}
{{--                                    <!-- Product name-->--}}
{{--                                    <h5 class="fw-bolder">Sale Item</h5>--}}
{{--                                    <!-- Product price-->--}}
{{--                                    <span class="text-muted text-decoration-line-through">$50.00</span>--}}
{{--                                    $25.00--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Product actions-->--}}
{{--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col mb-5">--}}
{{--                        <div class="card h-100">--}}
{{--                            <!-- Product image-->--}}
{{--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                            <!-- Product details-->--}}
{{--                            <div class="card-body p-4">--}}
{{--                                <div class="text-center">--}}
{{--                                    <!-- Product name-->--}}
{{--                                    <h5 class="fw-bolder">Fancy Product</h5>--}}
{{--                                    <!-- Product price-->--}}
{{--                                    $120.00 - $280.00--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Product actions-->--}}
{{--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col mb-5">--}}
{{--                        <div class="card h-100">--}}
{{--                            <!-- Sale badge-->--}}
{{--                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                            <!-- Product image-->--}}
{{--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                            <!-- Product details-->--}}
{{--                            <div class="card-body p-4">--}}
{{--                                <div class="text-center">--}}
{{--                                    <!-- Product name-->--}}
{{--                                    <h5 class="fw-bolder">Special Item</h5>--}}
{{--                                    <!-- Product reviews-->--}}
{{--                                    <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Product price-->--}}
{{--                                    <span class="text-muted text-decoration-line-through">$20.00</span>--}}
{{--                                    $18.00--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Product actions-->--}}
{{--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col mb-5">--}}
{{--                        <div class="card h-100">--}}
{{--                            <!-- Product image-->--}}
{{--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                            <!-- Product details-->--}}
{{--                            <div class="card-body p-4">--}}
{{--                                <div class="text-center">--}}
{{--                                    <!-- Product name-->--}}
{{--                                    <h5 class="fw-bolder">Popular Item</h5>--}}
{{--                                    <!-- Product reviews-->--}}
{{--                                    <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                        <div class="bi-star-fill"></div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Product price-->--}}
{{--                                    $40.00--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Product actions-->--}}
{{--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>

    </div>
{{--</div>--}}
@endsection
