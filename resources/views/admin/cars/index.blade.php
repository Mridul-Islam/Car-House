@extends('layouts.admin')

@section('content')

    <h2 class="text-center bg-info">All Cars</h2>
    <hr>

    <!-- Session values -->
    @if(Session::has('car_created'))
        <h4 class="text-center bg-success mb-5">{{ session('car_created') }}</h4>
    @endif
    @if(Session::has('car_updated'))
        <h4 class="text-center bg-success mb-5">{{ session('car_updated') }}</h4>
    @endif

    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Model</th>
                <th>Price (taka)</th>
                <th>Brand</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
            <tr>
                <td> {{ $car->id }} </td>
                <td><img src="{{ $car->image_id ? asset("images/" . $car->image->name) : ""  }}" alt="Car_Image" width="150px"></td>
                <td> {{ $car->model_name }} </td>
                <td> {{ $car->price }} </td>
                <td> {{ $car->brand->brand_name }} </td>
                <td><a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['cars.destroy', $car->id]]) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            <tr class="spacer"></tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
