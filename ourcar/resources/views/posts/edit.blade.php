<link  rel="icon"   href="https://i.ibb.co/1n5HZbB/favicon-ico.png" type="image/png" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @extends('layouts.app')
        <div class="container" style="margin-top:10%">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background-image: url('https://cdn.pixabay.com/photo/2021/06/10/16/15/travel-6326482_960_720.jpg')" ></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Editar Post</h1>
                                </div>
{!! Form::model($post,['route' => ['admin.posts.update',$post], 'autocomplete' =>'off','files'=>true, 'method'=>'put']) !!}

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
{!! Form::label('combustible', 'Modelo') !!}
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
   @isset ($post->image)
   <img id="picture" src="{{Storage::url($post->image->url)}}" width="100%">
   @else
   <img id="picture" src="https://cdn.pixabay.com/photo/2014/06/04/16/36/man-362150_960_720.jpg" width="100%">
   @endisset
 </div>
 <div class="col">
    <div class="form-group">
        {!! Form::label('file', 'imagen') !!}
        {!! Form::file('file', ['class'=>'form-control-file']) !!}
    </div>
    {!! Form::submit('Actualizar Post', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!} 
 </div>
</div>
</div>