@extends('layouts.admin')


@section('content')

    <h2 class="text-center bg-info"> All Brands </h2>
    <hr>

    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>brand name</th>
                <th>parent company</th>
                <th>Country</th>
                <th>created_at</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
            <tr class="tr-shadow">
                <td> {{ $brand->id }} </td>
                <td><img src="{{ $brand->image_id ? asset('images/' . $brand->image->name) : "No Image" }}" alt="Car_brand" width="120px"></td>
                <td> {{ $brand->brand_name }} </td>
                <td> {{ $brand->company_name }} </td>
                <td> {{ $brand->country_name }} </td>
                <td> {{ $brand->created_at->diffForHumans() }} </td>
                <td><a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary"> Edit </a></td>
                <td>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['brands.destroy', $brand->id]]) !!}
                        {!! Form::submit('Delete', ['class'=>['btn btn-danger']]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            <tr class="spacer"></tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
