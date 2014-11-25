@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de colores
@stop
 
@section('content')
        {{ HTML::link('colores', 'volver'); }}
        <h1>
  Crear color
      
    
  
</h1>
        {{ Form::open(array('url' => 'colores/crear')) }}
            {{Form::label('nombrecolor', 'Color')}}
            {{Form::text('nombrecolor', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop