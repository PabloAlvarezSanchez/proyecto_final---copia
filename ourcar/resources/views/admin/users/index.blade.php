@extends('adminlte::page')

@section('title', 'Ourcar')

@section('content_header')
    <h1>Lista de todos los usuarios</h1>
@stop

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a>
                </td>
                <td>
                     <form action="{{route('admin.users.destroy',$user)}}" method="POST"></form>
                    @csrf
                     @method('DELETE')
                     <button class="btn btn-danger" type="submit">Eliminar</button>
                </td> 
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop