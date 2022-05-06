@extends('adminlte::page')

@section('title', 'Ourcar')

@section('content_header')
    <h1>Edicion de categoria</h1>
@stop

@section('content')
{!! Form::model($category,['route' => ['admin.categories.update',$category], 'autocomplete' =>'off','method'=>'put']) !!}

<div class="form-group">
{!! Form::label('name', 'Nombre') !!}
{!! Form::text('name', null,['class' => 'form-control', 'placeholder'=>'Ingrese la categoria']) !!}
</div>

<div class="form-group">
{!! Form::label('slug', 'Slug') !!}
{!! Form::text('glug', null,['class' => 'form-control', 'placeholder'=>'Ingrese el modelo del vehiculo']) !!}
</div>




    {!! Form::submit('Actualizar categoria', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!} 
 </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
    
    </script>
@stop