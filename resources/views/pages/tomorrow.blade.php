@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
<!-- Display Validation Errors
@include('common.errors') -->

    <h2>Tomorrow's Tasks:</h2>
    <ul>
        @foreach ($tasks as $task)
            <li> {{ $task->name }}</li>
        @endforeach
    </ul>

@endsection