@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
            <header class="panel-heading">
                <b>Tambah Penilaian</b>
                <div class="panel-title pull-right">
                    <a href="{{URL::previous()}}">Kembali</a></div>
                </header>
					<div class="panel-body">
					<div class="form-horizontal">
					<form action="{{route('penilaian.update', $penilaian->id)}}" method="post" >
          <input type="hidden" name="_method" value="put">
          {{ csrf_field() }}

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-8">
                                  <select name="userid" class="form-control">
                              @foreach($user as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                              @endforeach
                              </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Perangkat Pembelajaran</label>
                              <div class="col-sm-8">
                                  <input name="perangkat_pembelajaran" type="number" class="form-control" required  value="{{$penilaian->perangkat_pembelajaran}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kedisiplinan</label>
                              <div class="col-sm-8">
                                  <input name="kedisiplinan" type="number" class="form-control" required value="{{$penilaian->kedisiplinan}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pelayanan Prima</label>
                              <div class="col-sm-8">
                                  <input name="pelayanan_prima" class="form-control"  type="number" required value="{{$penilaian->pelayanan_prima}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ketuntasan Nilai</label>
                              <div class="col-sm-8">
                                  <input name="ketuntasan_nilai" class="form-control" type="number" required value="{{$penilaian->ketuntasan_nilai}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                              <div class="col-sm-8">
                                  <input name="semester" class="form-control" type="number" required value="{{$penilaian->semester}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Penilaian</label>
                              <div class="col-sm-8">
                                  <input name="tgl_penilaian" class="form-control" type="date" required value="{{$penilaian->tgl_penilaian}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Ajaran</label>
                              <div class="col-sm-8">
                                  <input name="tahun_ajaran" class="form-control" type="text" required value="{{$penilaian->tahun_ajaran}}" />
                              </div>
                          </div>
                          <div class="form-group">
                        <div class="col-md-4">
                            <button type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
					</div>
			</div>
		</div>
	</div>
	@endsection