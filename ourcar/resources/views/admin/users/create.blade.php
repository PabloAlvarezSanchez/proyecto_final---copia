@extends('adminlte::page')

@section('title', 'Ourcar')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
 {!! Form::open(['route' => 'admin.users.store', 'autocomplete' =>'off','files'=>true]) !!}
 
 <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,['class' => 'form-control', 'placeholder'=>'Ingrese nuevo nombre']) !!}
    </div>
    
    <div class="form-group">
    {!! Form::label('email', 'Correo electronico') !!}
    {!! Form::text('email', null,['class' => 'form-control', 'placeholder'=>'Ingrese el nuevo correo electronico']) !!}
    </div>
    
    <div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', null,['class' => 'form-control', 'placeholder'=>'Ingrese la contraseña']) !!}
    </div>

       

         {!! Form::submit('Crear nuevo usuario', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!} 
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
      document.getElementById("file").addEventListener('change', cambiarImagen);
           function cambiarImagen(event){
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
           }
    </script>
@stop