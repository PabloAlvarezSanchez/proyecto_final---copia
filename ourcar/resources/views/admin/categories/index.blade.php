@extends('adminlte::page')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@section('title', 'Ourcar')

@section('content_header')
    <h1>Lista de categorias</h1>
    
@stop

@section('content')


    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                   
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.categories.edit',$category)}}">Editar</a>
                    </td>
                    <td>
                         <form action="{{route('admin.categories.destroy',$category)}}" method="category"></form>
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