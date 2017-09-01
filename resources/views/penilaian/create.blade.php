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
					<form action="{{route('penilaian.store')}}" method="post" >
					{{ csrf_field() }}
						             <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-8">
                                  <select name="userid" class="form-control">
                              @foreach($penilaian as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                              @endforeach
                              </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Perangkat Pembelajaran</label>
                              <div class="col-sm-8">
                                  <input name="perangkat_pembelajaran" max="100" type="number" class="form-control" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kedisiplinan</label>
                              <div class="col-sm-8">
                                  <input name="kedisiplinan" type="number" class="form-control" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pelayanan Prima</label>
                              <div class="col-sm-8">
                                  <input name="pelayanan_prima" class="form-control"  type="number" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ketuntasan Nilai</label>
                              <div class="col-sm-8">
                                  <input name="ketuntasan_nilai" class="form-control" type="number" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                              <div class="col-sm-8">
                                  <input name="semester" class="form-control" type="number" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Penilaian</label>
                              <div class="col-sm-8">
                                  <input name="tgl_penilaian" class="form-control" type="date" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Ajaran</label>
                              <div class="col-sm-8">
                                  <input name="tahun_ajaran" class="form-control" type="text" required />
                              </div>
                          </div>
                
                          <div class="form-group">
                            <div class="col-md-4">
                            <button type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
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