@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="card-columns" style="margin-top:5%">
    <div class="card">
      <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/03/19/03/40/avatar-2155431_960_720.png" alt="Card image cap">
      <div class="card-body">
            <h1>Editar perfil</h1>
        <p class="card-text">Informacion personal del usuario, ve, edita o elimina la cuenta</p>
      </div>
      <div class="d-grid gap-2">
        <a href="{{url('/posts')}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
  
    <div class="card p-3">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2021/11/04/16/19/travel-6768660_960_720.png" alt="Card image cap">
      
      <blockquote class="blockquote mb-0 card-body">
        <p>Tienes un coche que no utilizas, añadelo a nuestras ofertas</p>
      </blockquote>
      <div class="d-grid gap-2">
        <a href="{{url('/posts')}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <div class="card" >
      <img class="card-img-top" src="https://cdn-icons.flaticon.com/png/512/5594/premium/5594082.png?token=exp=1651225203~hmac=e96076d6db0c427415236b653946b202" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Mira todas nuestras ofertas disponibles en nuestro apartado</p>
      </div>
      <div class="d-grid gap-2">
        <a href="{{url('/posts')}}" class="btn btn-primary">Ver ofertas</a>
        </div>
    </div>



    
    
 