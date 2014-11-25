@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de usuario
@stop
 
@section('content')
        {{ HTML::link('usuarios', 'volver'); }}
        <h1>
  Crear Usuario
      
    
  
</h1>
        {{ Form::open(array('url' => 'usuarios/crear')) }}
            {{Form::label('username', 'Usuario')}}
            {{Form::text('username', '')}}
            {{Form::label('email', 'Email')}}
            {{Form::text('email', 'Ej. elvira@gmail.com')}}
            {{Form::label('password', 'Contraseña')}}
            {{Form::text('password', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop