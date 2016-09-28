<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TusCajasParaTrasteos</title>
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <!--link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'-->
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="../public/css/fonts.css" rel="stylesheet">
        {{--
        <link href="{{ elixir('css/app.scss') }}" rel="stylesheet">
        <link href="{{css/fonts.css}}" rel="stylesheet">
        --}}
        <style>
            body {
            background-color: #e0dad6;
            font-size: 18px;
            }
            
            .fa-btn {
            margin-right: 6px;
            }
            .navbar-default .navbar-brand{

            color: #333;
            }
            .banner {
            height:560px;
            border-radius: 10px;
            background-image:url('<?php echo e(asset("img/banner.JPG")); ?>');
            background-size:cover;
            margin-bottom:0px;
            padding: 0px 0px;
            margin-top: 7%;
            }
            .formulario1{
              background-color: rgba(250,250,250,0.5);
              color: #000;
              padding-top: 10px;
              margin-left: 10px;
              }

            .formulario{
              background-color: rgba(250,250,250,0.5);
              color: #000;
              padding: 20px
            }
            .formulario h3{
                text-align: center;
            }
            .enviar{
              text-align: center;
            }
            .boton {
              text-align: center;
              font-size: 25px;
              /*background-color:rgb(102,186,51) ;*/
              color: #eee;
              font-weight: normal;
              border-radius: 3px;
              border: 0px;
            }

            .titulo-banner{
            text-align: center;
            background-color: rgba(210,210,210,0.3);
            color:#fff;
            }
            .thumbnail{
              text-align: center;
              border-radius: 10px;
              border: 1px solid rgba(0,0,0,0.7);
              background-color: #eee;
              padding-bottom: 15px
            }
            .thumbnail button{
              width: 80%;
            }
            .fila{
            /*background-color: #fff;*/
              padding: 20px 0px 50px 0px;
            }
            footer{
              background-color: #fff;
              padding: 20px 15px 50px 15px;
              bottom: 0;
              width: 100%;
              text-align: center;
            }
            .jumbotron p{
              font-weight: normal;
            }
            .eslogan{
              background: rgba(0,0,0,0.41);
              color: white;
              position: relative;
              z-index: 5;
              padding: 15px;
              /*text-shadow: 2px 2px #444444;*/
              height: 100%;
              text-align: center;
              border-radius: 10px
            }
            .eslogan h1{
              margin-top:8%;
            }
            .eslogan h2{
              margin-top:0%;
            }
            .pasos{
              margin-top: 5%;
              padding-left: 0px;
              padding-right: 0px;
              text-align: center;
            }

            .precio h3{
              margin-top: 10px;
              margin-bottom: 5px;
            }
            .mediospago{
                float: right(100%);
                background: rgba(250,250,250,0.5);
                padding: 20px;
            }
            .mediospago h3{
                text-align: center;
            }
            .mediospago img{
                text-align: center;
                margin: 0 auto;
                margin-top: 7%;
                margin-bottom: 6%;
            }
            .imagenes-medios{

                width: 30%;
                margin: 0 auto;
            }
            .popup{

                background: rgba(250,250,250,0.5);
                display: none;
            }
            .barra-menu{
              width: 100%;
              margin: 0px auto;
              position: fixed;
              left: 0px;
              right: 0px;
              z-index: 30;
              height: 12%;
            }
            .telodije{
              width: 80%;
              text-align: center;
              margin: 0 auto;
            }
            .redes{
              position: relative;
              z-index: 5;
              padding-right: 8%;
              float: right;
              margin-top: 1.5%;
            }
            .logo{
              float: left;
              margin-top: -25px;
              margin-left: 4%;
            }
            .logo-grande{
              padding-top:6%;
              margin: 0 auto;
            }
            .logo img{
              width: 85%;
            }
            .texto-articulo{
              padding: 54px 45px 101px 0px;
              width:80%;
              margin:0 auto;
            }
            .contenedor-articulos{
              margin-top:15%;
              margin-bottom: 15%;
              padding: 54px 45px 101px 0px;
            }

            .articulos{

              background: white;
              border: solid 1px #ccc;
              border-radius: 5px;
              padding: 20px;
              margin-bottom: 5%;

            }
            
            .articulos a {

              color:#000;
              text-decoration: none;
            
            }

            .botones-kits{

              float:right;
              margin-bottom: 25%;


            }

            .texto {

              text-align: center;

            }
            .estadopedido{

              background-color: #4a007c;
              border-radius: 5px;
              font-weight: normal;
              font-size: 25px;
              border:0px;
              text-align: center;
              color:white;
            }
            .mas-articulos{

              background-color: #4a007c;
              border-radius: 5px;
              font-weight: normal;
              font-size: 25px;
              border:0px;
              text-align: center;
              color:white;
            }
            .mas-articulos a{
              color: white;
            }

            .mas-articulos a:hover{
              color: white;
              text-decoration: none;
            }
            .gracias{
              margin-top: 8%;
            }

        </style>
        <script>
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
    </head>
    <body id="app-layout">
    <div class="col-sm-4 ">
   <nav class="navbar navbar-default barra-menu">
        <!-- <nav class="navbar navbar-default barra-menu"> -->
            <div class="row">

                   
                    <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6 logo">
                      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img/tuscajas-logo.png')}}"></a>
                      <!--<a <href="/"><img class="img img-responsive" src="{{ asset('img/tus-cajas-logo.png') }}"></a>-->
                    </div>
                   
                    <div class="redes">
                    
                    <ul  id="tbsose">
                     <button type="submit" data-toggle="modal" data-target="#pedido" class="estadopedido precio"> Consulte el estado de su pedido</button>
                          <a href="https://www.facebook.com/tuscajasparatrasteoscom-1049470145119985/?fref=ts"><img src="{{asset('img/fb.png')}}"></a>
                    </ul>

                  </div>

                    <div class="collapse navbar-collapse navbar-right" id="app-navbar-collapse">
                    </div>
               </div>
        </nav>
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
