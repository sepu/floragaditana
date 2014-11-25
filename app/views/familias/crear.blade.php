@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de familias
@stop
 
@section('content')
        {{ HTML::link('familias', 'volver'); }}
        <h1>
  Crear Familia  
</h1>
        {{ Form::open(array('url' => 'familias/crear')) }}
            {{Form::label('nombrefam', 'Nombre')}}
            {{Form::text('nombrefam', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop