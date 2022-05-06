@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="icon"   href="https://i.ibb.co/1n5HZbB/favicon-ico.png" type="image/png" />
    <title>Contacto</title>
</head>
<body>
    <!DOCTYPE html>


  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }

      .full-height {
          height: 100vh;
      } 

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      } 
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box" style="width: 970px;">
   <h1 style="text-align:center;"> <tutofox/> </h1>
   <h3 align="center">Cómo enviar un correo electrónico en Laravel</h3>
   <br/>
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Nombre</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label> Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Mensaje</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Enviar" />
    </div>
   </form>

  </div>
 </body>
</html>
</body>
</html>