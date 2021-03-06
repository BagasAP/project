@extends('layouts.app')
@section('content')


<div class="container">
<div class="row">
    <center><h1>Data Guru</h1></center>
    <div class="panel panel-primary">
    <div class="panel-heading"> Data Guru 
    <div class="panel-title pull-right">
    <a href="guru/create">Tambah Data</a></div>
        
    </div>

    <div class="panel-body">
    <table class="table">
        <thead>
            <tr>
                <th>NIP </th>
                <th>Nama</th>
                <th>Status</th>
                <th>Pendidikan</th>
                <th>Jenis Kelamin</th>
                <th>Mulai Kerja</th>
                <th>Masa Mengajar</th>
                <th>Mapel</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guru as $data)
            <tr>
            <td>{{$data->nip}}</td>
            <td>{{$data->user->name}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->pendidikan}}</td>
            <td>{{$data->jk}}</td>
            <td>{{$data->mulai_kerja}}</td>
            <td>{{$data->masa_mengajar}} Tahun</td>
            <td>{{$data->mapel}}</td>
            
            <td>
                <a class="btn btn-warning" href="{{route('guru.edit', $data->id)}}">Edit</a>
                <td>
                    <form action="{{route('guru.destroy', $data->id )}}" method="post">
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