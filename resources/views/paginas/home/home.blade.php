@extends('layouts.user_layout.user_layout')


@section('title')
 Home
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop

@section('content')


<div id="home">
<!--PORTADA / header , previamente carousel/slider-->
<div id="section0">
  <div class="bgcolor-black">
    @include('paginas.home.home_header')
  </div>
</div>

<!--BRIEF INTRODUCTION TO GLOBAL / descripción breve de servicios y de la empresa-->
<div id="section1">
  <div class="container-fluid no-padding section-wrapper bgcolor-white">
    <div class="row">    
        <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
         @include('paginas.home.home_services')
        </div>
    </div>
  </div>
</div>

<!--PREMIUM BRANDS / logos de clientes prestigiosos-->
<div id="section2">
  <div class="container-fluid no-padding section-wrapper bgcolor-white hr-border-top-pegado">
        <div>
         @include('paginas.home.home_brands')
        </div>
  </div>
</div>

<!--PUZZLE (GT en números / cuadraditos-->
<div id="section3">
  <div class="container-fluid no-padding bg-home-puzzle">
       @include('paginas.home.home_puzzle')
  </div>
</div>

<!--ÚLTIMOS EVENTOS-->
<div id="section4">
  <div class="container-fluid bgcolor-3superlight">

       @include('paginas.home.home_eventos')

  </div>
</div>

</div>

@stop