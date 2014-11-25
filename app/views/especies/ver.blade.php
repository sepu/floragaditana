@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de especie
@stop
 
@section('content')
        {{ HTML::link('especies', 'Volver'); }}
        <h1>
  Especie {{$especie->id}}
      
</h1>
        
        {{ $especie->nombreesp .' '.$especie->author.' '.$especie->idsinonimo }}
        
<br />
        {{ $especie->created_at}}
@stop