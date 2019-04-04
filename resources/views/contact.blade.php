@extends('layouts.app')

@section('content')
	<h1>Contact</h1>
	{!! Form::open(array('url' => 'contact/submit')) !!}
    	<div class="form-group">
    		{{Form::label('name', 'Your Name')}}
    		{{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter Your Name: '])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('email', 'Your Email')}}
    		{{Form::text('email','',['class' => 'form-control', 'placeholder' => 'Enter Your Email: '])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('message', 'Message')}}
    		{{Form::textarea('message','',['class' => 'form-control', 'placeholder' => 'Message'])}}
    	</div>
    	<div class="form-group">
    		{{Form::submit('Submit Form',['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection
