<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @extends('layouts.app')
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
          
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    @if ($post->image)
                    <img class="card-img-top" src="{{Storage::url($post->image->url)}}" alt="..." /> 
                    @else
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/06/04/16/36/man-362150_960_720.jpg" alt="..." />
                    @endif
                    <div class="col-md-6">
                       
                        <h1 class="display-5 fw-bolder">{{$post->marca}} {{$post->modelo}}</h1>
                        <div class="fs-5 mb-5">
                            <span><p>{{$post->puertas}}€ por dia</p></span>
                            <span><p>Tipo de combustible{{$post->combustible}} :</p></span>
                        </div><span><p>Caballos de potencia: {{$post->cv}}</p></span>
                        <span><p>Año de fabricacion: {{$post->anio}}</p></span>
                        <span><p>Año de fabricacion: {{$post->descripcion}}</p></span>
                       
                       
                        <div class="d-flex">
                            
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" href="#contacto">
                                
                                Contactar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5" id="contacto">
                <h2 class="fw-bolder mb-4">Contacto del propietario</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">

                    <label for="name">Nombre:</label>
                        <input readonly class="form-control" type="text" name="name" value="{{$post->user->name}}" >

                        <label for="name">Correo electronico:</label>
                        <input readonly class="form-control" type="text" name="name" value="{{$post->user->email}}" >
                    
                    

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
                        <input class="form-control" type="text" name="name"  >
                
                        <label for="email">Correo:</label>
                        <input  class="form-control"type="text" name="email"  value=" {{$post->user->email}}">
                
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
                  

                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">OurCar</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    @extends('layouts.footer')
</html>