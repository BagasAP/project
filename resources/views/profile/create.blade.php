@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					 <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Tambah Data Profile</b>
                  <div class="panel-title pull-right">
                    <a href="{{URL::previous()}}">Kembali</a></div>
                </header>
					<div class="panel-body">
					<div class="form-horizontal">
					<form action="{{route('profile.store')}}" method="post" >
					{{ csrf_field() }}
						            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-8">
                                  <input name="name" type="text" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                              <div class="col-sm-8">
                                  <input name="email" type="email" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-8">
                                  <input name="password" type="password" class="form-control" required  />
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