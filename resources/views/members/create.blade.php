@extends('app')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Add new Member</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::open(['url' => 'members']) !!}
				@include('members.form', ['submitButton'=>'Add New Member'])
			{!! Form::close() !!}
		</div>
	</div>
@stop