<div class="form-group{{ $errors->has('nip') ? 'has-error' : ''}}">
    {!! Form::label('nip', 'NIP', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
  	{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'Nama', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
  <div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
<div class="form-group{{ $errors->has('jabatan') ? 'has-error' : ''}}">
    {!! Form::label('jabatan', 'Jabatan', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
<div class="form-group{{ $errors->has('pendidikan') ? 'has-error' : ''}}">
    {!! Form::label('pendidikan', 'Pendidikan', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group">
    
 {!! Form::label('jk', 'Jenis Kelamin', ['class'=>'col-md-2 control-label']) !!}
 <div class="col-md-4">
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki &nbsp;&nbsp;
    <input type="radio" name="jk" value="Perempuan">Perempuan
    </div>
 </div>
 <div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::textarea('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('ttl') ? 'has-error' : ''}}">
    {!! Form::label('ttl', 'Tanggal Lahir', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::date('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('mulai_kerja') ? 'has-error' : ''}}">
    {!! Form::label('mulai_kerja', 'Mulai Kerja', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::date('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('mapel') ? 'has-error' : ''}}">
    {!! Form::label('mapel', 'Mata Pelajaran', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('no_telp') ? 'has-error' : ''}}">
    {!! Form::label('no_telp', 'No Telepon', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('masa_mengajar') ? 'has-error' : ''}}">
    {!! Form::label('masa_mengajar', 'Masa Mengajar', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::number('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('kelas') ? 'has-error' : ''}}">
    {!! Form::label('kelas', 'Kelas', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('tahun_ajaran') ? 'has-error' : ''}}">
    {!! Form::label('tahun_ajaran', 'Tahun Ajaran', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('periode') ? 'has-error' : ''}}">
    {!! Form::label('periode', 'Periode', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::number('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
 </div>
 <div class="form-group{{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Foto', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
    {!! Form::file('foto') !!}
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
 </div>





 <div class="form-group">
 	<div class="col-md-4 col-md-offset-2">
 		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
 	</div>
 </div>