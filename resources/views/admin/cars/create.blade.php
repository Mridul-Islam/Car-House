@extends('layouts.admin')

@section('content')

    <h2 class="text-center bg-info">Create New Car</h2>
    <hr>

    <div class="col-md-12 m-auto">
        @include('includes.form_error')
        <hr>
    </div>

    <div class="col-md-12">
        {!! Form::open(['method'=>'post', 'route'=>'cars.store', 'files'=>true]) !!}
        <div class="col-md-4" style="float: left;">
            <div class="form-group">
                {!! Form::label('user_id', "User:") !!}
                {!! Form::text('user_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('model_name', 'Model Name:') !!}
                {!! Form::text('model_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::number('price', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('color', 'Color:') !!}
                {!! Form::text('color', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('noOfSeats', 'No Of Seats:') !!}
                {!! Form::number('noOfSeats', null, ['class'=>'form-control']) !!}
            </div>
            <hr>
        </div>
        <div class="col-md-4" style="float: left; overflow: hidden;">
            <div class="form-group">
                {!! Form::label('warrenty', 'Warrenty Time:') !!}
                {!! Form::number('warrenty', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('mileage', 'Mileage:') !!}
                {!! Form::number('mileage', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tank_size', 'Oil Tank Size:') !!}
                {!! Form::number('tank_size', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brand_id', 'Select Brand..') !!}
                {!! Form::select('brand_id', [''=>'Choose Option..'] + $brands, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('fuel_type', 'Select Fuel Type:') !!}
                {!! Form::select('fuel_type', [''=>'Choose Option..', 'petrol'=>'petrol', 'diesel'=>'diesel', 'CNG'=>'CNG', 'LPG'=>'LPG'], null, ['class'=>'form-control']) !!}
            </div>
            <hr>
        </div>
        <div class="col-md-4" style="overflow: hidden;">
            <div class="form-group">
                {!! Form::label('condition', 'Select Vehicle Condition:') !!}
                {!! Form::select('condition', [''=>'Choose Option..' ,'new'=>'New', 'used'=>'Used'], null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('gear_type', 'Select Gear Type:') !!}
                {!! Form::select('gear_type', [''=>'Choose Option', 'auto'=>'Auto', 'manual'=>'Manual'], null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image_id', 'Upload Car Image:') !!}
                {!! Form::file('image_id', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Car', ['class'=>'btn btn-primary form-control']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop
