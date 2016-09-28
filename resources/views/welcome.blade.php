
@extends('layouts.general')
@section('content')
<section>
  <div class="container  articulo_listado">
    <div class="banner" id="banner">
      <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12 eslogan">
       <!--img class="img img-responsive logo-grande" src="img/tus-cajas-logo-grande.png"-->
       <h1>Todo lo que necesitas para empacar, a domicilio y a un solo clic</h1>
       <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12 pasos">
        <h3>Conoce la evolución de tu pedido</h3>
        <img class="img img-responsive" src="{{asset('img/pasos-cajas.png')}}">
      </div>

    </div>
  </div>
</div>  
</section>
<section>
  <div class='container'>

    <div class="row fila">
      @foreach(App\Kits::where("state","=","act")->get() as $kit)
      <div class="caption">
        <div class="col-sm-4 ">
         <div class="thumbnail">
           <br>
           <h3><?php echo e($kit->name); ?></h3>
           <br><br>
           <?php echo $kit->description; ?>
           <br>
           <br>
           "<?php echo e($kit->contents); ?>"
           <br>
           <br>
           <br>
           <button type="button" class="boton btn-success precio" data-toggle="modal" data-target="#myModal">
            <h3>Haz clic para comprar este kit por</h3>
            <h3>$<?php echo e(number_format($kit->price,0,".",".")); ?></h3>
          </button>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</section>
<script> 
  function checkInput(city) {

    city = document.getElementById("city").value;

    if(city== "BOGOTA" || city == "BOGOTÁ" || city== "BOGOTá" || city== "BOGOTA D.C" || city== "Bogota" || city== "BogotÁ" || city== "Bogotá" || city=="bogota" || city=="bogotá" || city=="bogotÁ" || city=="bogota d.c"){

    }else{
      $("#payment option[value='Contra entrega']" ).hide();
    }
  }
</script>
<div class="container">
 @foreach(App\articles::where("state", "=", "act")->take('2')->orderBy('id','DESC')->get() as $articles)

 <div class="col-md-6 articulos">
  <!-- <div class="col-sm-4 "> -->
  <div class="col-md-12">
   <div class="altura">
     <h2> <a href="{{ route('articles.show', $articles->id) }}">{{ $articles->title}}</a></h2>
   </div>
   <div>
     <a href="{{ route('articles.show', $articles->id) }}"> {!!str_limit($articles->description , 100)!!}</a>
   </div>


 </div>

</div>
@endforeach
<!-- <div class="container">
  <button type="submit" class="mas-articulos"> <a href="{{url('articulos/index')}}">más articulos ...</a></button>

</div> -->
</div>
<br>
<section>      <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h1 class="titulo">Solicita tu kit ahora</h1><br>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <div class="row">
            <center> <h3>Tus Datos</h3></center><br>
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 formulario">
             <form  array(role="form" method="POST" action="{{ url('order') }}")>
                {!! csrf_field() !!}

                <div class="primera-parte">
                  <div class="form-group">
                    <label for="name">Nombre completo</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="segunda-parte">
                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
                <div class="primera-parte">
                 <div class="form-group">
                  <label for="tel">Teléfono fijo o celular</label>
                  <input type="text" class="form-control" name="tel">
                </div>
              </div>
              <div class="segunda-parte">
                <div class="form-group">
                  <label for="city">Ciudad</label>
                  <input type="text" class="form-control" name="city" id="city" onchange="checkInput(this);">
                  <span class="aclaracion">*todo envío por fuera de Bogotá tendrá un costo  adicional de $12.000</span>
                </div>  
              </div>
              <div class="form-group direccion">
                <label for="address">Dirección</label>
                <textarea class="form-control" name="address" id="address"></textarea>
              </div>
              <div class="primera-parte">
                <div class="form-group">
                  <label for="neighborhood">Barrio</label>
                  <input type="text" class="form-control" name="neighborhood">
                </div>
              </div>
              <div class="segunda-parte">
                <div class="form-group">
                  <label for="tel">Kit</label>
                  <select class="form-control" name="kit_id" id="kit">
                    @foreach(App\Kits::where("state","=","act")->orderBy('name')->get() as $kit)
                    <option value='{{$kit->id}}'>{{$kit->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="tercera-parte">
                <div class="form-group">
                  <label for="tel">Forma de pago</label>
                  <select class="form-control" name="payment" id="payment">
                   <option value=''>Selecciona</option>
                   <option value='Contra entrega' >Contra entrega</option>
                   <option value='Tarjeta de credito' >Tarjeta de crédito</option>
                   <option value='PSE' >PSE</option>
                   <option value='Baloto'>Baloto</option>
                 </select>
               </div>
             </div>
             <br>
            @foreach(App\Extras::where("id", "=" , 1 )->get()  as $extras)
             <div class="kit-agrande">{{$extras->name}} $15000
               <input type="checkbox" value="{{$extras->id}}" id="{{$extras->id}}" name="extra_id[0]" id="check1" class="cuadro" aria-label="...">
             </div>         
             @endforeach
           @foreach(App\Extras::where("id", "=" , 2)->get()  as $extras)
           <div class="kit-agrande">{{$extras->name}} $12000
             <input type="checkbox" value="{{$extras->id}}" id="{{$extras->id}}" name="extra_id[1]" class="cuadro" aria-label="...">
           </div>                  
           @endforeach
         @foreach(App\Extras::where("id", "=" , 3)->get()  as $extras)
         <div class="kit-agrande">{{$extras->name}} $10000
           <input type="checkbox" value="{{$extras->id}}" id="{{$extras->id}}" name="extra_id[2]"  class="cuadro" aria-label="...">
         </div>                  
         @endforeach
       @foreach(App\Extras::where("id", "=" , 4)->get()  as $extras)
       <div class="kit-agrande">{{$extras->name}} $10000
         <input type="checkbox" value="{{$extras->id}}" id="{{$extras->id}}" name="extra_id[3]" class="cuadro" aria-label="...">
       </div>                  
       @endforeach
       
       <BR>
     <div class="form-group boton">
      <button type="submit" class="btn btn-success">¡Solicita tu kit ahora!</button>
    </div>
  </form>
</div>
<div class="mediospago">
 <h3>Aceptamos estos medios de pago</h3>
 <img src="img/baloto1.png"> <img src="img/contraentrega.png"> <img src="img/payu1.png"> <img src="img/pse1.png">
 <!-- </div> -->
</div>
</div>
</div>
</div>
</div>
</div>

</section>

</div>


<?php

$someVariable = Input::get("resultado");


$results = DB::select( DB::raw("SELECT state  FROM `orders` WHERE email = :somevariable ORDER BY id asc"), array(
  'somevariable' => $someVariable,
  ));
foreach ($results as $resu) {

  echo "<script>

  swal(

    '$resu->state'    
    )
</script>"; 
}
?>


<div class="modal fade in " tabindex="-1" id="pedido"role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>INGRESA TU CORREO</p>
        <form>
          <input type="text" name="resultado" class="form-control" placeholder="E-mail"><br>
          <input type="submit" name="estado" class="boton btn-success" value="Consultar">
        </form>
      </div>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection