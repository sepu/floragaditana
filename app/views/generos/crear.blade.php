@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de generos
@stop
 
@section('content')
        {{ HTML::link('generos', 'volver'); }}
        <h1>
  Crear genero
      
    
  
</h1>
        {{ Form::open(array('url' => 'generos/crear')) }}
            {{Form::label('nombregen', 'Nombre')}}
            {{Form::text('nombregen', '')}}
            {{Form::label('idfamilia', 'Familia')}}
            {{Form::text('idfamilia', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop