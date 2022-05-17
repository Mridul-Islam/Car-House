@extends('layouts.admin')

@section('content')

    <h2 class="text-center bg-info">Update Brand</h2>
    <hr>

    <div class="">
        <div class="col-md-4" style="float: left;">
            <div class="container-fluid">
                <img class="img-thumbnail" src="{{ $brand->image_id ? asset("images/" . $brand->image->name) : "No Image" }}" alt="" width="300px">
            </div>
            <div class="" style="font-size: 14px;">
                @include('includes.form_error')
            </div>
        </div>

        <div class="col-md-8" style="overflow: hidden;">
            {!! Form::model($brand, ['method'=>'PATCH', 'route'=>['brands.update', $brand->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('brand_name', "Brand Name:") !!}
                {!! Form::text('brand_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('company_name', 'Company Name:') !!}
                {!! Form::text('company_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image_id', 'Brand Logo:') !!}
                {!! Form::file('image_id', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('country_name', 'Country Name:') !!}
                {!! Form::text('country_name',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update brand', ['class'=>'form-control btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop
