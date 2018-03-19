@extends('layouts.user_layout.auth_layout')


@section('title')
 Iniciar Sesion 
@stop

@section('MetaContent')
  Entra en.  
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop

@section('Boton')
 Entrar
@stop




@section('content')


 
             <div class="Auth-Field-Contenedor">
                  {!! Form::text('email', null ,
                    ['class'              => 'Auth-Field-Contenedor-Label-Input',
                     'required'           => 'required',
                     'data-pattern'       => 'calle',
                     'data-empty-message' => 'Ingresa Tu Email',
                     'data-error-message' => 'Escribe Un Email',
                     'placeholder'        => 'Correo']) !!}
             </div>

              <div class="Auth-Field-Contenedor">
              {!! Form::password('password', [ 'class'              => 'Auth-Field-Contenedor-Label-Input',
                     'required'           => 'required',                     
                     'placeholder'        => 'password']) !!}
              </div>
     

@stop