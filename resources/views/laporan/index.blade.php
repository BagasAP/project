@extends('layouts.app')
@section('content')

<div class="row">
<div class="container">
    <center><h1>Laporan</h1></center>
    <div class="panel panel-primary">
    <div class="panel-body">
    <table class="table">
        <thead>
            <tr>
                <th>NIP </th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Kepala Sekolah</th>
                <th>Sekolah</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hasil as $data)
        <?php
         $h = $data->total * 0.25;

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
            <tr>
            <td>{{$data->nip}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->mapel}}</td>
            <td>{{$data->nama_kepsek}}</td>
            <td>{{$data->nama_sekolah}}</td>
            <td>{{$data->tgl_penilaian}}</td>
            <td>{{$data->total}}</td>
            <td>{{ $d }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
    </div>
    </div>
</div>
</div>
@endsection