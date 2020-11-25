@extends('layouts.master')
@section('content')
<table class="egt">

  <tr>
    <td>
      <div class="card" style="width: 18rem;">
        <img src="https://static.wixstatic.com/media/57032d_e18310ca9b7644149dc119824216e1c4~mv2.png/v1/fill/w_210,h_210,al_c,q_85,usm_0.66_1.00_0.01/57032d_e18310ca9b7644149dc119824216e1c4~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
        <h1> COMIDA</h1>
          <ul>
          @foreach($comida1 as $c)
          <li>{{ $c }}</li>
          @endforeach
          </ul>
          <a href="#" class="btn btn-primary">COMPRAR</a>
        </div>
      </div>
   </td>
   <td>
      <div class="card" style="width: 18rem;">
        <img src="https://static.wixstatic.com/media/57032d_d58890450e93459e80010133486cd16a~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_d58890450e93459e80010133486cd16a~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
        <h1> ACCESORIO</h1>
          <ul>
          @foreach($juguete as $j)
          <li>{{ $j }}</li>
          @endforeach
          </ul>
          <a href="#" class="btn btn-primary">COMPRAR</a>
        </div>
      </div>
   </td>
   <td>
      <div class="card" style="width: 18rem;">
        <img src="https://static.wixstatic.com/media/57032d_4429601de35b4386b55f2f3b3ff5fe5e~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_4429601de35b4386b55f2f3b3ff5fe5e~mv2.webp" class="card-img-top" alt="...">
        <div class="card-body">
        <h1> ACCESORIO</h1>
          <ul>
          @foreach($plato as $p)
          <li>{{ $p }}</li>
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
          @foreach($palo as $pa)
          <li>{{ $pa }}</li>
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
        <img src="https://static.wixstatic.com/media/57032d_33eda114ac25402c9eea4754c5efec5b~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_33eda114ac25402c9eea4754c5efec5b~mv2.webp" alt="...">
        <div class="card-body">
        <h1> ACCESORIO</h1>
          <ul>
          @foreach($alfombra as $al)
          <li>{{ $al }}</li>
          @endforeach
          </ul>
          <a href="#" class="btn btn-primary">COMPRAR</a>
        </div>
      </div>
  </td>
  <td>
    <div class="card" style="width: 18rem;">
      <img src="https://static.wixstatic.com/media/57032d_7942d964345a4b52a4911042d3cf91ef~mv2.jpg/v1/fill/w_210,h_210,al_c,q_80,usm_0.66_1.00_0.01/57032d_7942d964345a4b52a4911042d3cf91ef~mv2.webp" alt="...">
      <div class="card-body">
      <h1> COMIDA</h1>
        <ul>
        @foreach($galle as $g)
        <li>{{ $g }}</li>
        @endforeach
        </ul>
        <a href="#" class="btn btn-primary">COMPRAR</a>
      </div>
    </div>
</td>
</tr>
</table>







@stop