@extends('app')

@section('content')
	<h1>Edit {{$member->nama}} ({{$member->kode_anggota}}) </h1>
	<hr>

	@include('errors.list')
	

	{!! Form::model($member, ['method' => 'patch', 'action' => ['MembersController@update', $member->id]]) !!}
		@include('members.form', ['submitButton'=>'Update Member'])
	{!! Form::close() !!}


@stop