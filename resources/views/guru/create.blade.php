@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					 <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Tambah Guru</b>
                  <div class="panel-title pull-right">
                    <a href="{{URL::previous()}}">Kembali</a></div>
                </header>
					<div class="panel-body">
					<div class="form-horizontal">
					<form action="{{route('guru.store')}}" method="post" >
					{{ csrf_field() }}
						            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                              <div class="col-sm-8">
                                  <input name="nip" type="text" class="form-control" required  />
                                  {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
                              </div>
                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-8">
                              <input type="text" name="name" class="form-control" required="">
                              {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                              </div>
                          </div>
                          <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                            {!! Form::label('email', 'Alamat Email', ['class'=>'col-sm-2 col-sm-2 control-label']) !!}
                            <div class="col-sm-8">
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-8">
                                  <input name="status" type="text" class="form-control" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pendidikan</label>
                              <div class="col-sm-8">
                              <select name="pendidikan" class="form-control">
                                  <option value="SD">SD</option>
                                  <option value="SMP">SMP</option>
                                  <option value="SMA">SMA</option>
                                  <option value="SMK">SMK</option>
                                  <option value="S1">S1</option>
                              </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-8">
                                 <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                                 <input type="radio" name="jk" value="Perempuan">Perempuan
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-8">
                                 <textarea name="alamat" required="" class="form-control"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-8">
                                  <input name="ttl" class="form-control"  type="date" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Mulai kerja</label>
                              <div class="col-sm-8">
                                  <input name="mulai_kerja" class="form-control" type="date" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Masa Mengajar</label>
                              <div class="col-sm-8">
                                  <input name="masa_mengajar" class="form-control" type="number" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Telephone</label>
                              <div class="col-sm-8">
                                  <input name="no_telp" class="form-control" type="text" required max="13" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kelas</label>
                              <div class="col-sm-8">
                                  <select name="kelas" class="form-control">
                                      <option value="X">X</option>
                                      <option value="XI">XI</option>
                                      <option value="XII">XII</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Mata Pelajaran</label>
                              <div class="col-sm-8">
                                  <select name="mapel" class="form-control">
                                      <option value="IPA">IPA</option>
                                      <option value="IPS">IPS</option>
                                      <option value="Seni Budaya">Seni Budaya</option>
                                      <option value="MTK">MTK</option>
                                      <option value="Fisika">Fisika</option>
                                      <option value="Kimia">Kimia</option>
                                      <option value="B.Inggris">B.inggris</option>
                                      <option value="B.Indonesia">B.Indonesia</option>
                                      <option value="Penjaskes">Penjaskes</option>
                                  </select>
                              </div>
                          </div>
                          

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                            {!! Form::label('password', 'Password', ['class'=>'col-sm-2 col-sm-2 control-label']) !!}
                            <div class="col-sm-8">
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                            </div>
                          </div>
<!--                           <div class="form-group">
                              <label class="col-sm-2 col-sm-4 control-label">Foto</label>
                              <input type="file" name="photo">
                            </div> -->
                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                               <div class="form-group">
                        <div class="col-md-4">
                            <button type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                          </div>
                          </form>
                          </div>
                          </div>
					</div>
			</div>
		</div>
	</div>

	@endsection