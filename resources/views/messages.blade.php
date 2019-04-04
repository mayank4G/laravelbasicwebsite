@extends('layouts.app')

@section('content')
	<h1>Messages</h1>
	@if(count($messages) > 0)
	<ul class="list-group">
	@foreach($messages as $message)		
			<li class="list-group-item">Name: {{$message->name}}</li>
			<li class="list-group-item">Email: {{$message->email}}</li>
			<li class="list-group-item">Message: {{$message->message}}</li>
	@endforeach
	</ul>
@endif

@endsection