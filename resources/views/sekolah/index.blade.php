@extends('layouts.app')
@section('content')

<div class="row">
<div class="container">
    <center><h1>Data Sekolah</h1></center>
    <div class="panel panel-primary">
    <div class="panel-heading">Data Sekolah
    <div class="panel-title pull-right">
    <a href="sekolah/create">Tambah Data</a></div>
        
    </div>

    <div class="panel-body">
    <table class="table">
        <thead>
            <tr>
                <th>Nomor </th>
                <th>Nama Sekolah</th>
                <th>Status</th>
                <th>Nama Kepala Sekolah</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sekolah as $data)
            <tr>
            <td>{{$data->ns}}</td>
            <td>{{$data->nama_sekolah}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->nama_kepsek}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->telp}}</td>

            <td>
                <a class="btn btn-warning" href="{{route('sekolah.edit', $data->id)}}">Edit</a>
                <td>
                    <form action="{{route('sekolah.destroy', $data->id )}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" >
                        <input class="btn btn-danger" type="submit" value="Delete" >
                        {{csrf_field()}}
                    </form>
                </td>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
    </div>
    </div>
</div>
</div>
@endsection