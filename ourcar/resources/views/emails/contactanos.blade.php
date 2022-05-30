<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio</title>
</head>
<body>
    <img src="https://i.ibb.co/1n5HZbB/favicon-ico.png" alt="" width="100%">
    <h1>Credenciales</h1>
    <p><strong>Nombre:</strong>{{$contacto['name']}}</p>
    <p><strong>Email:</strong>{{$contacto['email']}}</p>

    <h2>Asunto:</h2>

    <p><strong>Mensaje:</strong>{{$contacto['mensaje']}}</p>
</body>
@extends('layouts.footer')
</html>