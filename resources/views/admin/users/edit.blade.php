@extends('layouts.admin')

@section('content')

    <h2 class="text-center bg-info">Update User</h2>
    <hr>

    <div class="">
        <div class="col-md-4" style="float: left;">
            <div class="container-fluid">
                <img class="img-thumbnail" src="{{ $user->image_id ? asset('images/' . $user->image->name) : asset('images/user_logo.png') }}" alt="" width="300px">
            </div>
            <div class="" style="font-size: 14px;">
                @include('includes.form_error')
            </div>
        </div>

        <div class="col-md-8" style="overflow: hidden;">
            {!! Form::model($user, ['method'=>'PATCH', 'route'=>['users.update', $user->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', "Name:") !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Select Role:') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image_id', 'Upload Image:') !!}
                {!! Form::file('image_id', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'New Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'form-control btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop
