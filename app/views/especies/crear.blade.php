@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de especies
@stop
 
@section('content')
        {{ HTML::link('especies', 'volver'); }}
        <h1>
  Crear especie
      
    
  
</h1>
        {{ Form::open(array('url' => 'especies/crear')) }}
            {{Form::label('nombreesp', 'Especie')}}
            {{Form::text('nombreesp', '')}}
            {{Form::label('author', 'Autor')}}
            {{Form::text('author', '')}}
            {{Form::label('protegida', 'Protegida')}}
            {{Form::text('protegida', '')}}
            {{Form::label('idsinonimo', 'Sinonimo')}}
            {{Form::text('idsinonimo', '')}}
            {{Form::label('hibrido', 'Hibrido')}}
            {{Form::text('hibrido', '')}}
            {{Form::label('idpadre', 'Padre')}}
            {{Form::text('idpadre', '')}}
            {{Form::label('idmadre', 'Madre')}}
            {{Form::text('idmadre', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop