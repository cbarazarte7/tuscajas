@extends('layouts.general')
@section('content')

<style >
  .art h1{

    margin-top: 10%;


}
</style>
     
       
        <div  class="container" >
             
           <center class="art h2"> <h1>{{$articles->title}}</h1></center><br><br>
           <div class="texto-articulo"> {{$articles->description}}</div>
            

             </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
         <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    @endsection