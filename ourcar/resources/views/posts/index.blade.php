<link  rel="icon"   href="https://i.ibb.co/1n5HZbB/favicon-ico.png" type="image/png" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @extends('layouts.app')

    <div class="container px-4 px-lg-5 mt-5" style="display: inline">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center "style="margin-top: 10%">
            @foreach($posts as $post)
            <div class="col mb-6">
                <div class="card h-100">
                    <!-- Product image-->
                    @if ($post->image)
                    <img class="card-img-top" src="{{Storage::url($post->image->url)}}" alt="..." /> 
                    @else
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/06/04/16/36/man-362150_960_720.jpg" alt="..." />
                    @endif
                    
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$post->marca}} {{$post->modelo}}</h5>
                            <!-- Product price-->
                           <p>Ciudad: {{$post->ciudad}}</p> 
                           <p>Año: {{$post->anio}}</p>
                           <p>Potencia: {{$post->cv}}</p> 
                           <p>Combustible: {{$post->combustible}}</p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('posts.show',$post->id)}}">Ver oferta</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@extends('layouts.footer')