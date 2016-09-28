@extends('layouts.general')
@section('content')

<div class="container">
    <div class="jumbotron gracias">
        <h1>Su pago ha sido {{$resultado}}</h1>
        <p>Por favor vualva a intentarlo</p>
        <a href="{{url('/')}}">Volver a intentar</a>
    </div>
</div>
@endsection

