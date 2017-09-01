@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
           <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Edit Guru</b>
                <div class="panel-title pull-right">
                    <a href="{{URL::previous()}}">Kembali</a></div>
                </header>
          <div class="panel-body">
          <div class="form-horizontal">
          <form action="{{route('guru.update', $guru->id)}}" method="post" >
          <input type="hidden" name="_method" value="put">
          {{ csrf_field() }}
                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                              <div class="col-sm-8">
                                  <input name="nip" type="text" class="form-control" required  value="{{$guru->nip}}" />
                              </div>
                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-8">
                              <select name="user_id" class="form-control">
                              @foreach($user as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                              @endforeach
                              </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-8">
                                  <input name="status" type="text" class="form-control" required value="{{$guru->status}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pendidikan</label>
                              <div class="col-sm-8">
                              <select name="pendidikan" class="form-control">
                                <option value="">{{$guru->pendidikan}}</option>
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
                                 <textarea name="alamat" required="" class="form-control">{{$guru->alamat}}</textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-8">
                                  <input name="ttl" class="form-control"  type="date" required value="{{$guru->ttl}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Mulai kerja</label>
                              <div class="col-sm-8">
                                  <input name="mulai_kerja" class="form-control" type="date" required value="{{$guru->mulai_kerja}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Masa Mengajar</label>
                              <div class="col-sm-8">
                                  <input name="masa_mengajar" class="form-control" type="number" required value="{{$guru->masa_mengajar}}" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Telephone</label>
                              <div class="col-sm-8">
                                  <input name="no_telp" class="form-control" type="text" required value="{{$guru->no_telp}}" max="13" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kelas</label>
                              <div class="col-sm-8">
                                  <select name="kelas" class="form-control">
                                  <option >{{$guru->kelas}}</option>
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
                                      <option value="">{{$guru->mapel}}</option>
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