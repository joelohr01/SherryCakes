@extends('layouts.default')

@section('content')
    <div class="container">

        <h1>Create a New Project</h1>

        {{ HTML::ul($errors->all()) }}

        {{ Form::open(array('url' => 'projects')) }}

        <div class="form-group">
            {{ Form::label('projectname', 'Project Name') }}
            {{ Form::text('projectname', Input::old('projectname'), array('class' => 'form-control input-lg', 'placeholder' => 'Project Name')) }}
        </div>

        <div class="form-group">
            {{ Form::label('customername', 'Customer Name') }}
            {{ Form::text('customername', Input::old('customername'), array('class' => 'form-control input-lg', 'placeholder' => 'Customer Name')) }}
        </div>

        <div class="form-group">
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', Input::old('customeraddress'), array('class' => 'form-control input-lg', 'placeholder' => 'Address')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', Input::old('customercity'), array('class' => 'form-control input-lg', 'placeholder' => 'City')) }}
        </div>

        <div class="form-group">
            {{ Form::label('state', 'State') }}
            {{ Form::text('state', Input::old('customerstate'), array('class' => 'form-control input-lg', 'placeholder' => 'State')) }}
        </div>

        <div class="form-group">
            {{ Form::label('zip', 'Zip Code') }}
            {{ Form::text('zip', Input::old('customerzip'), array('class' => 'form-control input-lg', 'placeholder' => 'Zip Code')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', Input::old('customeremail'), array('class' => 'form-control input-lg', 'placeholder' => 'Email Address')) }}
        </div>

        <div class="form-group">
            {{ Form::label('phone', 'Phone Number') }}
            {{ Form::text('phone', Input::old('customerphone'), array('class' => 'form-control input-lg', 'placeholder' => 'Phone Number')) }}
        </div>

        {{ Form::submit('Add New Project', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@stop