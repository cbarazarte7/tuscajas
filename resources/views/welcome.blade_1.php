@extends('layouts.general')
@section('content')
<style type="text/css">
    @media (min-width: 768px){
        .modal-dialog {
             width: 80%;
             margin: 30px auto;
             display: block;
             padding-right: 17px;
         }
         .articulos a {
          
                 color:#000;
                 text-decoration: none;

            }
            
          .modal-header {
          padding: 15px;
          border-bottom: 1px solid #e5e5e5;
           }
         
         .btn{
            font-size: 30px;
         }
         
         .modal-header{
            text-align: center;
         }
         .row{
           margin-left: 0px;
           margin-right: 0px;
         }

         #pedido {
           width: 50%;
           margin: 10% auto;

                   }

          .altura{

            height: 200%;
            line-height: 1.42857143;
          }
          .articulo_listado{
            border-radius: 15%;

          }
        }
     
</style>
        <section>
            <div class="container  articulo_listado">
                <div class="banner" id="banner">
                  <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12 eslogan">
                   <!--img class="img img-responsive logo-grande" src="img/tus-cajas-logo-grande.png"-->
                          <h1>Todo lo que necesitas para empacar, a domicilio y a un solo clic</h1>
                            <div class=" row col-sm-12 col-xs-12 col-lg-12 col-md-12 pasos">
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
                                     <br>
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

          <div class="container altura" >
              
                 @foreach(App\articles::where("state", "=", "act")->take('2')->orderBy('id','DESC')->get() as $articles)

                 <div class="col-md-6 articulos">
                  <!-- <div class="col-sm-4 "> -->
                  <div class="col-md-12">
                  <h2> <a href="{{ route('articles.show', $articles->id) }}">{{ $articles->title}}</a></h2><br>
                   
                   <a href="{{ route('articles.show', $articles->id) }}"> {{ str_limit($articles->description , 100)}}</a>
                   
                     </div>
                     
            </div>
            @endforeach
            <div class="container">
            <button type="submit" class="mas-articulos"> <a href="{{url('articulos/index')}}">más articulos ...</a></button>
                  
             </div>
          </div>
          <br>
            <section>      <!-- Modal -->
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
            <h3>Todo envío por fuera de la ciudad de Bogotá tendrá un costo adicional de $30.000</h3>
        </div>
  </div>
                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
                </div>
            </div>
        </div>
    </div>

</section>
         <?php
        
         $someVariable = Input::get("resultado");

                        $results = DB::select( DB::raw("SELECT `state` FROM `orders` WHERE email = :somevariable"), array(
                        'somevariable' => $someVariable,
        ));
        foreach ($results as $resu) {

                              echo "<script>
                    
                                swal(
                                    'Estado Pedido Es:',
                                    '$resu->state',
                                    'success'
                                    
                                    )

                              </script>"; 
                }
            ?>


    <div class="modal fade in " tabindex="-1" id="pedido"role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">CONSULTE</h4>
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