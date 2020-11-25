@extends('layouts.master')
@section('content')
<table class="egt">

  <tr>
    <td>
      <div class="card" style="width: 18rem;">
        <img src="https://static.wixstatic.com/media/57032d_2bbeec6ac84a4b498bc8d4c45d850f21~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_2bbeec6ac84a4b498bc8d4c45d850f21~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
        <h1> COMIDA</h1>
          <ul>
          @foreach($comidacat as $c)
          <li>{{ $c }}</li>
          @endforeach
          </ul>
          <a href="#" class="btn btn-primary">COMPRAR</a>
        </div>
      </div>
   </td>
   <td>
      <div class="card" style="width: 18rem;">
        <img src="https://static.wixstatic.com/media/57032d_46ffd2e069604d90867c4fb5e54b19b3~mv2.png/v1/fill/w_210,h_210,al_c,q_85,usm_0.66_1.00_0.01/57032d_46ffd2e069604d90867c4fb5e54b19b3~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
        <h1> ACCESORIO</h1>
          <ul>
          @foreach($collarcat as $co)
          <li>{{ $co }}</li>
          @endforeach
          </ul>
          <a href="#" class="btn btn-primary">COMPRAR</a>
        </div>
      </div>
   </td>
   <td>
      <div class="card" style="width: 18rem;">
        <img src="https://static.wixstatic.com/media/57032d_cda6f9c47e8749a98fed69178b263dc0~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_cda6f9c47e8749a98fed69178b263dc0~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
        <h1> ACCESORIO</h1>
          <ul>
          @foreach($arenacat as $ar)
          <li>{{ $ar }}</li>
          @endforeach
          </ul>
          <a href="#" class="btn btn-primary">COMPRAR</a>
        </div>
      </div>
   </td>
   <td>
      <div class="card" style="width: 18rem;">
        <img src="https://static.wixstatic.com/media/57032d_06654caddb9b4b4fa0dd171c94d52637~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_06654caddb9b4b4fa0dd171c94d52637~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
        <h1> ACCESORIO</h1>
          <ul>
          @foreach($juguetecats as $jc)
          <li>{{ $jc }}</li>
          @endforeach
          </ul>
          <a href="#" class="btn btn-primary">COMPRAR</a>
        </div>
      </div>
   </td>
</tr>
<tr>

    <td>
        <div class="card" style="width: 18rem;">
            <img src="https://static.wixstatic.com/media/57032d_da79e8dfa1184f65ac40a172ea13ffef~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_da79e8dfa1184f65ac40a172ea13ffef~mv2.webp" class="card-img-top" alt="...">
            <div class="card-body">
            <h1> MEDICINA</h1>
            <ul>
            @foreach($desodorantecat as $de)
            <li>{{ $de }}</li>
            @endforeach
            </ul>
            <a href="#" class="btn btn-primary">COMPRAR</a>
            </div>
        </div>
    </td>
    <td>
        <div class="card" style="width: 18rem;">
            <img src="https://static.wixstatic.com/media/57032d_ad279684bff3431cb67ac5408b9317d6~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_ad279684bff3431cb67ac5408b9317d6~mv2.webp" alt="...">
            <div class="card-body">
            <h1> MEDICINA</h1>
            <ul>
            @foreach($medicinacat as $me)
            <li>{{ $me }}</li>
            @endforeach
            </ul>
            <a href="#" class="btn btn-primary">COMPRAR</a>
            </div>
        </div>
    </td>

</tr>

@stop