@extends('layouts.app')
<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<div class="container" style="margin-top:10%">
   <div class="card o-hidden border-0 shadow-lg my-5">
       <div class="card-body p-0">
           <div class="row">
               <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background-image: url('https://cdn.pixabay.com/photo/2021/06/10/16/15/travel-6326482_960_720.jpg')" ></div>
               <div class="col-lg-7">
                   <div class="p-5">
                       <div class="text-center">
                           <h1 class="h4 text-gray-900 mb-4">Nuevo Post</h1>
                       </div>
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


