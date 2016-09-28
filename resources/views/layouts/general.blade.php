<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TusCajasParaTrasteos</title>
        <!-- Fonts -->
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <!--link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'-->
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
        <link href="{{asset('css/estilo.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        {{--
        <link href="{{ elixir('css/app.scss') }}" rel="stylesheet">
        <link href="{{css/fonts.css}}" rel="stylesheet">
        --}}

        <!-- <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75128699-1', 'auto');
            ga('send', 'pageview');

        </script> -->
	    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-3816772-24', 'auto');
		  ga('send', 'pageview');

		</script>
        
         <script src="js_general/lib/jquery/jquery-1.10.1.min.js"></script>
        <script src="js_general/lib/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="js_general/lib/jquery/jquery-scrollto.js"></script>
        <script src="js_general/lib/js/plugins.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- alerta -->

        <script src="plugin/alert/sweetalert2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="plugin/alert/sweetalert2/dist/sweetalert2.min.css">

        <!-- for IE support -->
        <script src="plugin/alert/promise/promise.min.js"></script>

        <!-- parallax -->
        <!--     <script type="text/javascript" src="js/lib/jquery/1.6.4/jquery.min.js"></script> -->
        <script type="text/javascript" src="js_general/lib/parallax/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js_general/lib/parallax/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="js_general/lib/parallax/jquery.scrollTo-1.4.2-min.js"></script>

        <!-- parallax -->
        <!--     <script type="text/javascript" src="js/lib/jquery/1.6.4/jquery.min.js"></script> -->
        <script type="text/javascript" src="js_general/lib/parallax/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js_general/lib/parallax/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="js_general/lib/parallax/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                     var host = location.hostname;
                    var protocol = location.protocol;
                    var httpURL = protocol +'//'+host+'/tuscajas/public';
                    
                    $(document).on('click','.boton-contactenos', function(){
                        $('section.contactenos').fadeIn('slow', function(){
                            location.replace(httpURL + "/#contactenos");
                        });
                    });
            })
        </script>
          <script>
            $('#city').change(function() {
            //   $order_result = strtoupper($order->city);
            // if(strcmp($order_result, "BOGOTA")!=0 && strcmp($order_result, "BOGOTá")!=0 && strcmp($order_result, "BOGOTÁ")!=0 && strcmp($order_result, "BOGOTA D.C")!=0){
              alert('The option with value ' + $(this).val() + ' and text ' + $(this).text() + ' was selected.');
            // }
            });
            </script>

</head>
    <body id="app-layout">
      <div class="barra-menu hidden-xs hidden-sm">
        <div class="row">
          <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <a href="{{ url('/') }}" class="img-header">
                <img class="img img-responsive" src="{{asset('img/tuscajas-logo.png')}}">
              </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="ul-pedido">
                <button type="submit" data-toggle="modal" data-target="#pedido" class="estadopedido precio"> Consulta el estado de tu pedido</button>
                <div class="facebook-pedido" style="padding: 0">
                  <a href="https://www.facebook.com/tuscajasparatrasteoscom-1049470145119985/?fref=ts">
                    <img src="{{asset('img/fb.png')}}">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row barra-menu-peque hidden-md hidden-lg">
        <div class="col-xs-12 col-sm-12">
          <a href="{{ url('/') }}" class="img-header">
            <img class="img img-responsive" src="{{asset('img/tuscajas-logo.png')}}">
          </a>
        </div>
        <div class="col-xs-12 col-sm-12 facebook-pedido-2" style="padding:0">
          <a href="https://www.facebook.com/tuscajasparatrasteoscom-1049470145119985/?fref=ts">
            <img class="img img-responsive" src="{{asset('img/fb.png')}}">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <div data-toggle="modal" data-target="#pedido" class="estadopedido-2 precio"> 
            Consulte el estado de su pedido
          </div>
        </div>
      </div>
        @yield('content')
        <footer>
          <div class="container text-muted">

                 Tuscajasparatrasteos.com<br>
                 Calle 97A #71A - 65, Bogotá, Colombia<br>
                 Tel:(57) (1) 6750281<br>
                 Desarrollado Por<br>
                  <a href="http://grimorum.com" target="_blank"><img src=" {{ asset('img/grimorum.png') }}"></a>
            </div>
        </footer>
                <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
        
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover();
            })
        </script>
        <script>
        $(".sweet-confirm").click(function(){
            history.back(-1);
          
        })
        
          
        </script>
        
    </body>
</html>
