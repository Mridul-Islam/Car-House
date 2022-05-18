@extends('layouts.app')

@section('content')

    <h2 class="text-center bg-info py-4">All Cart Products</h2>
    <hr>

    @if(Session::has('cart_deleted'))
        <h4 class="text-center text-danger">{{ session('cart_deleted') }}</h4>
    @endif

    <div class="container">
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Prodcut Image</th>
                    <th>Product Name</th>
                    <th>Product Price (BDT)</th>
                    <th>Saved At</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carts as $cart)
                    <tr class="tr-shadow">
                        <td>{{ $cart->id }}</td>
                        <td><img src="{{ asset('images/' . $cart->car->image->name) }}" width="180px"/></td>
                        <td>{{ $cart->car->model_name }}</td>
                        <td>{{ $cart->car->price }}</td>
                        <td>{{ $cart->created_at->diffForHumans() }}</td>
                        <td>
                            {!! Form::open(['method'=>'delete', 'route'=>['cart_delete', $cart->id]]) !!}
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@stop
