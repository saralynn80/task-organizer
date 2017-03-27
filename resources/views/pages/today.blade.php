@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

<!-- Display Validation Errors
@include('common.errors') -->

@if (count($tasks))
	<h2>Today's Tasks:</h2>
	    <ul>
	        @foreach ($tasks as $task)
	            <li> {{ $task->name }}</li>
	        @endforeach
	    </ul>
@endif

@endsection