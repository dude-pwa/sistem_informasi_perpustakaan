<div class="input-group">
	{!! Form::label('kode_anggota', 'Kode Anggota: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::text('kode_anggota', null, ['class' => 'form-control']) !!}
</div> <br>
<div class="input-group">
	{!! Form::label('nama', 'Nama: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div><br>
<div class="input-group">
	{!! Form::label('alamat', 'Alamat: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div><br>
<div class="input-group pull-right">
	<a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-default">Back</a> &nbsp;&nbsp;&nbsp;
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>