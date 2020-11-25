@extends('layouts.master')
@section('content')
       
       <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.terranea.es/assets/images/razas/american_pitbull_terrier2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>TIENDA DE MASCOTAS </h5>
        <h6> "Quiero a mi Mascota"</h6>
        <p>La mejor tienda para su mascota de la Ciudad. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mascota.com.co/tienda-de-mascotas-medellin/images/bullterrierpyrata.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>TIENDA DE MASCOTAS </h5>
        <h6> "Quiero a mi Mascota"</h6>
        <p>Los Mejores Precios Para Nuestros Clientes.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://perrosgatosonline.com/wp-content/uploads/2018/08/pitbull-americano3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>TIENDA DE MASCOTAS </h5>
        <h6> "Quiero a mi Mascota"</h6>
        <p>Excelente atencion con sus mascotas.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop