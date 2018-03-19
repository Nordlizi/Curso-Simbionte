<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  

    <title>{{-- {{$Empresa->name}} --}} - @yield('title')</title>
    <meta name="Description" CONTENT="@yield('MetaContent')">

    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/mixer.css') }}">   
    <link rel="stylesheet" type="text/css" href=" {{ asset('Iconos/fonts/style.css')}}">
    <META name="robots" content="@yield('MetaRobot')">
  </head>

  <body> 
           <div class="contenedor-general-auth">
            <div class="contenedor-Auth">
            {!! Form::open( ['route'   => $Route,
                            'method'   => 'Post',
                            'files'    => true,
                            'class'    => 'Form-Auth',
                            'id'       => 'Form-LogIn'
                            ])               !!}
            
             @yield('content')
             
             <input type="submit" class="boton-inicio_sesion" value="@yield('Boton')" >           

          {!! Form::close() !!}
          </div>
     
                 
          </div>
  <!-- Scripts -->
  <script src="{{ asset('js/all.js')}}"></script> 
  </body>
</html>   