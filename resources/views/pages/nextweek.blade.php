@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

    <h2>Next Week:</h2>
    
	<ul>
        @foreach ($tasks as $task)
            <li> {{ $task->name }}</li>
        @endforeach
    </ul>

@endsection