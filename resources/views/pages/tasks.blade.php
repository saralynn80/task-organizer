@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
<!-- Display Validation Errors
@include('common.errors') -->

<h2>All Tasks: </h2>

    @foreach ($tasks as $task)
        <ul>
            <li>{{ $task->name }}</li>
        </ul>
    @endforeach

@stop