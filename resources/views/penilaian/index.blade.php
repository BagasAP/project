@extends('layouts.app')
@section('content')

<div class="row">
<div class="container">
    <center><h1>Data Penilaian</h1></center>
    <div class="panel panel-primary">
    <div class="panel-heading">Data Penilaian
    <div class="panel-title pull-right">
    <a href="penilaian/create">Tambah Data</a></div>
        
    </div>

    <div class="panel-body">
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Perangkat Pembelajaran</th>
                <th>Kedisiplinan</th>
                <th>Pelayanan Prima</th>
                <th>Ketuntasan Nilai</th>
                <th>Semester</th>
                <th>Tanggal Penilaian</th>
                <th>Tahun Ajaran</th>
                <th>Total</th>
                <th>Keterangan</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penilaian as $data)
            <tr>
        <?php
         $t =$data->total;
         $h = $t * 0.25;

         if($h <= 100 && $h >= 90){
            $d="Excellent Teacher";
         }elseif ($h <=89 && $h >= 80) {
            $d="Great Teacher";
         }elseif ($h <=79 && $h >= 70) {
             $d="Good Teacher";
         }elseif ($h <=69 && $h >= 60) {
             $d="Medium Teacher";
         }elseif ($h >=101 || $h < 0 ) {
            $d="Errro Input";
         }else{
            $d="";
         }
         ?>
            <td>{{$data->users->name}}</td>
            <td>{{$data->perangkat_pembelajaran}}</td>
            <td>{{$data->kedisiplinan}}</td>
            <td>{{$data->pelayanan_prima}}</td>
            <td>{{$data->ketuntasan_nilai}}</td>
            <td>{{$data->semester}}</td>
            <td>{{$data->tgl_penilaian}}</td>
            <td>{{$data->tahun_ajaran}}</td>
            <td><?php echo $h ?></td>
            <td><?php echo $d ?></td>
            <td>
                <a class="btn btn-warning" href="{{route('penilaian.edit', $data->id)}}">Edit</a>
                <td>
                    <form action="{{route('penilaian.destroy', $data->id )}}" method="post">
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