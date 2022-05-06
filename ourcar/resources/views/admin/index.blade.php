@extends('adminlte::page')

@section('title', 'Ourcar')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lista de posts</h5>
          <p class="card-text">Ver todos los posts que se han creado</p>
          <a href="admin/posts" class="btn btn-primary">Entrar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Mis posts</h5>
          <p class="card-text">Ver todos mis posts.</p>
          <a href="admin/posts2" class="btn btn-primary">Entrar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Ver categorias</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="admin/categories" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Crear una nueva categoria</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop