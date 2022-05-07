@extends('layouts.admin')

@section('content')

    <h2 class="text-center bg-info">Create New User</h2>
    <hr>

    <div>
        <div class="col-md-6 m-auto" style="font-size: 12px;">
            @if(count($errors) > 0)
                <div class="alert alert-danger well">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="col-md-6 m-auto">
            {!! Form::open(['method'=>'post', 'route'=>'users.store', 'files'=>true]) !!}
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
                {!! Form::select('role_id', [''=>'Choose option..'] + $roles, null, ['class'=>'form-control']) !!}
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
                {!! Form::submit('Create User', ['class'=>'form-control btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@stop
