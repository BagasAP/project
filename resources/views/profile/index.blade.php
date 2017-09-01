@extends('layouts.app')
@section('content')


<div class="container">
<div class="row">
    <center><h1>User</h1></center>
    <div class="panel panel-primary">
    <div class="panel-heading"> Data User
    <div class="panel-title pull-right">
    <a href="profile/create">Tambah Data</a></div>
        
    </div>

    <div class="panel-body">
    <table class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>E-mail</th>
                <th>Password</th>
                <!-- <th colspan="2">Action</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($user as $data)
            <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->password}}</td>
            <!-- <td>
                <a class="btn btn-warning" href="{{route('profile.edit', $data->id)}}">Edit</a>
                <td>
                    <form action="{{route('profile.destroy', $data->id )}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" >
                        <input class="btn btn-danger" type="submit" value="Delete" >
                        {{csrf_field()}}
                    </form>
                </td>
            </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>    
    </div>
    </div>
</div>
</div>
@endsection