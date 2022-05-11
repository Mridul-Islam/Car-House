@extends('layouts.admin')

@section('content')

    <h2 class="text-center bg-info"> Create New Brand </h2>
    <hr>

    <div>
        <div class="col-md-3 m-auto" style="font-size: 12px; float: left">
            @include('includes.form_error')
        </div>

        <div class="col-md-6" style="overflow: hidden;">
            {!! Form::open(['method'=>'post', 'route'=>'brands.store', 'files'=>true]) !!}
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
                {!! Form::text('country_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Brand', ['class'=>'form-control btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop
