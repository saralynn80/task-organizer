@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
<!-- Display Validation Errors
@include('common.errors') -->

<h2>All Tasks: </h2>

    @foreach ($tasks as $task)
        <ul>
            <li>{{ $task->name }} 
            	<a style="font-weight: bold">({{ $task->specific_duedate }})</a>
            		<form action="/{{ $task->id }}" method="POST">
            			{{ csrf_field() }}
            			{{ method_field('DELETE') }}

            		 <button class="btn btn-labeled btn-danger">
            		 	<i class="glyphicon glyphicon-trash"></i></button>


                	<button class="btn btn-labeled btn-success">
                		<i class="glyphicon glyphicon-ok"></i></button>
                		</form>
        			
        	</li>
        </ul>
    @endforeach

@stop