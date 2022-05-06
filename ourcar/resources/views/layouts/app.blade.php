<link  rel="icon"   href="https://i.ibb.co/1n5HZbB/favicon-ico.png" type="image/png" />
<div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
   
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar fixed-top" style=>
           
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
              OURCAR
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                        <li class="nav-item" >
                            <a class="nav-link active" aria-current="page" href="{{url('/category')}}">Categoria de coches</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/posts')}}">Buscar Ofertas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('contactanos.index') }}">Contactos</a>
                          </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    
                    <!-- Authentication Links -->
                    @guest
                     
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{'/user'}}">
                                    {{ __('Mi perfil') }}
                                </a>
                                
                                <a class="dropdown-item" href="{{url('/post')}}">
                                    {{ __('Dashboard') }}
                                </a>
                                <a class="dropdown-item" href=""
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesion') }}
                                </a>

                                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>
