@extends('app')

@section('content')
	<div class="col-lg-4 pull-right">
	{!! Form::open(['route'=>'members.index', 'method'=>'GET', 'class'=>'input-group']) !!}
		{!! Form::text('search', Request::get('search'), ['class'=>'form-control', 'placeholder'=>'Search for...']) !!}
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
   {!! Form::close()!!}
  </div><!-- /.col-lg-6 -->

  <br>

	<div class="panel panel-success">
		<h1 class="panel-heading">Member Lists</h1>
		<table class="table table-striped">
			<tr>
				<th class="col-md-1">No.</th>
				<th class="col-md-2">Kode Anggota</th>
				<th class="col-md-3">Nama</th>
				<th>Alamat</th>
				<th colspan="2" class="center">Action</th>
			</tr>
			<?php $i = 1; ?>
			@while($i <= $members->count())
				@foreach($members as $member)
					<tr>
						<td>{{$i}}</td>
						<td>{{ $member->kode_anggota }}</td>
						<td>{{ $member->nama }}</td>
						<td>{{ $member->alamat }}</td>
						<td class="col-md-1" align="right">
							<a href="/members/{{$member->id}}/edit" class="btn btn-xs btn-info">Edit</a> 
						</td>
						<td class="col-md-1" align="left">
							{!! Form::open(['method'=>'delete', 'route'=>['members.destroy', $member->id]]) !!}
							{!! Form::submit('Delete', ['class'=>'btn btn-xs btn-danger']) !!}
							{!!Form::close()!!}
						</td>
					</tr>
				<?php $i += 1 ?>
				@endforeach
			@endwhile
		</table>

		<br>
		<div class="center">
			{{$members->links()}}
		</div>
	</div>
	<br>
	<a href="/members/create" class="btn btn-primary">Add New Member</a>
	<br><br>
@endsection

