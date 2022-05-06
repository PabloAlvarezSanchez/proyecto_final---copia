@extends('adminlte::page')

@section('title', 'Ourcar')

@section('content_header')
    <h1>Edicion de usuario</h1>
@stop

@section('content')
{!! Form::model($user,['route' => ['admin.users.update',$user], 'autocomplete' =>'off', 'method'=>'put']) !!}

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

    {!! Form::submit('Actualizar Post', ['class' => 'btn btn-primary']) !!}
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