@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					 <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Edit Sekolah</b>
                  <div class="panel-title pull-right">
                    <a href="{{URL::previous()}}">Kembali</a></div>
                </header>
					<div class="panel-body">
					<div class="form-horizontal">
					<form action="{{route('sekolah.update', $sekolah->id)}}" method="post" >
					{{ csrf_field() }}
						          <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Nomer Sekolah</label>
                              <div class="col-sm-8">
                                  <input name="nss" type="text" class="form-control" required  value="{{$sekolah->nss}}" />
                              </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Nama Sekolah</label>
                              <div class="col-sm-8">
                                  <input name="nama_sekolah" type="text" class="form-control" required  value="{{$sekolah->nama_sekolah}}" />
                              </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-8">
                                 <input type="radio" name="status" value="Swasta">Swasta
                                 <input type="radio" name="status" value="Negeri">Negeri
                              </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Nama Kepala Sekolah</label>
                              <div class="col-sm-8">
                                  <input name="nama_kepsek" type="text" class="form-control" required  value="{{$sekolah->nama_kepsek}}" />
                              </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Alamat Sekolah</label>
                              <div class="col-sm-8">
                                  <textarea name="alamat" class="form-control" required="">{{$sekolah->alamat}}</textarea>
                              </div>
                      </div>
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