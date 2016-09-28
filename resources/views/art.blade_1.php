@extends('layouts.general')
@section('content')


<div class="container">
 

      <div class="contenedor-articulos col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

          @foreach(App\articles::where("state", "=", "act")->get() as $articles)
          <div class="articulos">

              <h2 > <a href="{{ route('articles.show', $articles->id) }}">{{ $articles->title}}</a></h2><br>
                     
              <a href="{{ route('articles.show', $articles->id) }}"> {{ str_limit($articles->description , 250)}}</a>
                  </div>   
          @endforeach

        </div>
        

        <div class="botones-kits col-xs-3 col-sm-3 col-md-3 col-lg-3">

          <h2 class="texto">No olvides hacer tu pedido</h2>
          <br>

        @foreach(App\Kits::where("state","=","act")->get() as $kit)
      
          <button type="button" class="boton btn-success precio botones-kits" data-toggle="modal" data-target="#myModal">
      
            <h3>Haz clic para comprar este kit por</h3>
      
            <h3>$<?php echo e(number_format($kit->price,0,".",".")); ?></h3>
      
          </button>
      
        @endforeach
      
      </div>
      </div> 
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h1>Solicita tu Kit Ahora</h1>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
    <div class="modal-body">
        <div class="row">
           <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6 formulario">

            <h3>Tus Datos</h3><br>
            <form  role="form" method="POST" action="{{ url('order') }}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name">Nombre completo</label>
                    <input type="text" class="form-control" name="name"> 
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="tel">Teléfono fijo o celular</label>
                    <input type="text" class="form-control" name="tel">
                </div>
                <div class="form-group">
                    <label for="tel">Kit</label>
                    <select class="form-control" name="kit_id" id="kit">
                        @foreach(App\Kits::where("state","=","act")->orderBy('name')->get() as $kit)
                        <option value='{{$kit->id}}'>{{$kit->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <textarea class="form-control" name="address" id="address" ></textarea>
                </div>
                <div class="form-group">
                    <label for="tel">Forma de pago</label>
                    <select class="form-control" name="payment" id="payment">
                        <option value='ent'>Contra entrega</option>
                        <option value='cre'>Tarjeta de crédito</option>
                        <option value='pse'>PSE</option>
                        <option value='bal'>Baloto</option>
                    </select>
                </div><br>
                <div class="form-group boton">
                    <button type="submit" class="btn btn-success">¡Solicita tu kit ahora!</button>
                </div>
            </form>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6  mediospago">
            <h3>Medios de Pago</h3><br>
            <div class="imagenes-medios">
                <img src="{{asset('img/contraentrega.png')}}">
                <img src="{{asset('img/payu1.png')}}">
                <img src="{{asset('img/pse1.png')}}">
                <img src="{{asset('img/baloto1.png')}}">
            </div>
            <h3>Todo envío por fuera de la ciudad de Bogotá tendrá un costo adicional de $12.000</h3>
        </div>
  </div>
                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
                </div>
            </div>
        </div>
    </div>
         
</div>
           
            
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
         <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    @endsection