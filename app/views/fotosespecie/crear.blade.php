@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de fotografías para una especie
@stop
 
@section('content')
        {{ HTML::link('fotos', 'volver'); }}
        <h1>
  Añadir Foto  
</h1>
        {{ Form::open(array('url' => 'fotosespecie/crear')) }}
            {{Form::label('nombrefoto', 'Imagen')}}
            {{Form::text('nombrefoto', '')}}
            {{Form::label('idespecie', 'Especie')}}
            {{Form::text('idespecie', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop