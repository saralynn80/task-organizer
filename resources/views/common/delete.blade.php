@extends('layouts.app')

@section('content')

{!! Form::open(['url' => 'tasks']) !!}

<div class="form-group">

	{!! Form::label('name', 'Task:') !!}
	{!! Form::text('name', null) !!}

</div>

<div class="form-group">

	{!! Form::label('due_date', 'General Due Date:') !!}

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

<!-- Specific due date Form Input -->
<div>
	{!! Form::label('specific_duedate', 'Actual Due Date:') !!}
	{!! Form::input('date', 'specific_duedate', date('Y-m-d')) !!}

</div>

<!-- Submit -->
<div class="form-group" style="padding-top: 20px">
	{!! Form::submit('+ Add', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}


@stop