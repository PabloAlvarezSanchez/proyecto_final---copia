@extends('layouts.app')
<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="icon"   href="https://i.ibb.co/1n5HZbB/favicon-ico.png" type="image/png" />
        <title>OurCar</title>
    </head>
    <style>
     body{
        background-image: url("https://img.interempresas.net/fotos/744820.jpeg");
     }

     footer{
         margin-top: 10%;
     }

     .card-group{
       margin-top: 10%;
     }

    .card-columns{
      margin-top: 10%;
    }
     }
    </style>
    <body>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2018/02/27/18/17/road-3186188_960_720.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>¿QUE ES OURCAR?</h5>
                    <p>Oucar es un portal en el que el usuario ve y alquila un vehiculo que puede llegar a necesitar durante unos dias o icluso semanas</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2014/04/27/00/43/traffic-332857_960_720.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>¿QUE NOS OFRECE?</h5>
                    <p>OurCar ofrece una sencilla forma de alquiler entre personas y no entre empresas para los respectivos dias que la persona necesite</p></div>
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/05/05/02/32/hot-air-balloons-1373161_960_720.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>¿EN QUE NOS DIFERENCIAMOS?</h5>
                    <p>A diferencia de los demas, OurCar busca una forma secilla de combatir la contaminacion del mundo</p>
                  </div>
              </div>
            </div>
          </div>
        
       
         

         
          <div class="card-columns">
            <div class="card">
              <img class="card-img-top" src="https://cdn.pixabay.com/photo/2020/01/07/17/26/cathedral-4748181_960_720.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Galicia, una comunidad autónoma del noroeste de España, es una región con abundante vegetación y una costa en el Atlántico. La catedral de la capital regional Santiago de Compostela es el supuesto lugar donde se conservan los restos del apóstol Santiago el Mayor, y el destino para aquellos que peregrinan por el Camino de Santiago.</p>
              </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/07/20/19/32/burgos-3551330_960_720.jpg" alt="Card image cap">
                <div class="card-body">
                <p> Admirar sus catedrales, conventos, monasterios, castillos y ciudades amuralladas conservadas en perfecto estado, suponen una experiencia única, dando la impresión al viajero de sumergirse en tiempos pasados. </p>                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/10/19/00/23/sea-3757677_960_720.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Tenerife es la más grande de las islas Canarias de España, frente a África Occidental. La domina el monte Teide, un volcán inactivo que es la cima más alta de España. Tenerife es mejor conocida por el Carnaval de Santa Cruz, un enorme festival previo a la Cuaresma con desfiles, música, danza y trajes coloridos. </p>
                </div>
              </div>


            <div class="card p-3">
              <blockquote class="blockquote mb-0 card-body">
                <p>Es un sitio muy agragable, tiene una amplua carta y el personal es de un trato exquisito. Vamos a menudo y nunca nos defraudan</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>



            </div>
            <div class="card">
              <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/01/22/12/09/madrid-1999645_960_720.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"> Madrid se caracteriza por una vida cultural muy activa, entre bibliotecas, universidades, museos, exposiciones y toda clase de actos culturales. Su actividad económica se manifiesta en encuentros como los realizados en los modernos palacios de congresos o el parque Ferial Juan Carlos I, que acoge importantes ferias comerciales.</p> </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2020/05/12/18/29/city-5164368_960_720.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Sevilla es una ciudad que "envuelve y cautiva al visitante con una mezcla de belleza y sentimiento. Sus monumentos, como la imponente catedral gótica, epicentro de uno de los cascos antiguos más extensos de Europa, son la perfecta puesta en escena para una ciudad que disfruta de la calle como ninguna otra".</p>
                </div>
              </div>

              <div class="card">
                <img class="card-img" src="https://cdn.pixabay.com/photo/2018/03/14/23/00/barcelona-3226639_960_720.jpg" alt="Card image">
                <div class="card-body">
                  <p class="card-text">Barcelona, la capital cosmopolita de la región de Cataluña en España, es conocida por su arte y arquitectura. La fantástica iglesia de la Sagrada Familia y otros hitos modernistas diseñados por Antoni Gaudí adornan la ciudad.</p>  </div>
              </div>

            <div class="card bg-primary text-white text-center p-3">
              <blockquote class="blockquote mb-0">
                <p>Un lugar perfecto para una cena tanto en familia como en pareja. Muy buena carta de vinos. Recomiendo ensalada con helado de orégano (o algo así), realmente sorprendente y espectacular. Muy buena atención h el servicio.</p>
                <footer class="blockquote-footer">
                  <small>
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>


            <div class="card">
              <img class="card-img" src="https://cdn.pixabay.com/photo/2016/09/23/17/14/mallorca-1690102_960_720.jpg" alt="Card image">
              <div class="card-body">
                <p class="card-text">Es conocida por los balnearios en la playa, las caletas protegidas, las montañas de caliza y las ruinas romanas y moriscas. La capital, Palma, tiene vida nocturna, el palacio real morisco de La Almudaina y la Catedral de Santa María del siglo XIII</p>  </div>
            </div>


            <div class="card p-3 text-right">
              <blockquote class="blockquote mb-0">
                <p> <footer class="blockquote-footer">
                  <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
          </div>
    </body>
    @extends('layouts.footer')
</html>
