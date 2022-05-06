@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link  rel="icon"   href="https://i.ibb.co/1n5HZbB/favicon-ico.png" type="image/png" />
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top:10%">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background-image: url('https://cdn.pixabay.com/photo/2021/11/13/19/27/architecture-6792168_960_720.jpg')" ></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulario de contacto</h1>
                            </div>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input class="form-control" type="text" name="name" >

        <label for="email">Correo:</label>
        <input  class="form-control"type="text" name="email" >

        <label for="mensaje">Mensaje:</label>
        <textarea  class="form-control"rows="4" type="text" name="mensaje"></textarea>
    <br>
            <button  class="btn btn-success" type="submit">Enviar mensaje</button>
    
        </form>
        @if (session('info'))
        <div class="alert alert-success" role="alert">
            Mensaje enviado
          </div>
        @endif
</body>
</html>