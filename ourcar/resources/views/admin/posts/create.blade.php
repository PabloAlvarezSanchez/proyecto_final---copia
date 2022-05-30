@extends('adminlte::page')

@section('title', 'Ourcar')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
 {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' =>'off','files'=>true]) !!}
 {!! Form::hidden('user_id',auth()->id()) !!}
         <div class="form-group">
            {!! Form::label('marca', 'Nombre') !!}
            {!! Form::text('marca', null,['class' => 'form-control', 'placeholder'=>'Ingrese la marca del vehiculo']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('modelo', 'Modelo') !!}
            {!! Form::text('modelo', null,['class' => 'form-control', 'placeholder'=>'Ingrese el modelo del vehiculo']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null,['class' => 'form-control', 'placeholder'=>'Que tipo de coche es']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('descripcion', 'Descripcion') !!}
            {!! Form::textarea('descripcion', null,['class' => 'form-control', 'placeholder'=>'Ingrese algun tipo de descripcion']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('puertas', 'Precio por dia') !!}
           {!! Form::number('puertas', null,['class' => 'form-control', 'placeholder'=>'Ingrese el precio por dia']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('combustible', 'Combustible') !!}
            {!! Form::text('combustible', null,['class' => 'form-control', 'placeholder'=>'Ingrese el combustible']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('anio', 'Año de fabricacion') !!}
           {!! Form::number('anio', null,['class' => 'form-control', 'placeholder'=>'Ingrese la fecha de fabricacion']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('km', 'Kilometros recorridos') !!}
           {!! Form::number('km', null,['class' => 'form-control', 'placeholder'=>'Ingrese el numero de kilometros recorridos']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('ciudad', 'Ciudad') !!}
            {!! Form::text('ciudad', null,['class' => 'form-control', 'placeholder'=>'Introduzca la ciudad']) !!}
         </div>

         <div class="form-group">
            {!! Form::label('cv', 'Caballos') !!}
           {!! Form::number('cv', null,['class' => 'form-control', 'placeholder'=>'Ingrese el numero de caballos']) !!}
         </div>

         <div class="row">
             <div class="col">
                <img id="picture" src="https://cdn.pixabay.com/photo/2014/06/04/16/36/man-362150_960_720.jpg" width="100%">
             </div>
             <div class="col">
                <div class="form-group">
                    {!! Form::label('file', 'imagen') !!}
                    {!! Form::file('file', ['class'=>'form-control-file']) !!}
                </div>
                 
             </div>
         </div>

         {!! Form::submit('Crear nuevo post', ['class' => 'btn btn-primary']) !!}
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