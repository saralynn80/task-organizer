@extends('layouts.app')

@section('content')

{!! Form::open(['url' => 'tasks']) !!}

<div class="form-group">

	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null) !!}

</div>

<div class="form-group">

	{!! Form::label('due_date', 'Due:') !!}

	<div class="form-check">
		{!! Form::radio('due_date', 'today', true) !!}
	Today
	</div>

	<div class="form-check">
		{!! Form::radio('due_date', 'tomorrow') !!}
	Tomorrow
	</div>

	<div class="form-check">
		{!! Form::radio('due_date', 'nextweek') !!}
	Next Week
	</div>

	<div class="form-check">
		{!! Form::radio('due_date', 'nextmonth') !!}
	Next Month
	</div>

	<div class="form-check">
		{!! Form::radio('due_date', 'someday') !!}
	Someday
	</div>

</div>

<!-- Submit -->
<div class="form-group">
	{!! Form::submit('+ Add', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}


@stop