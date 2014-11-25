@extends('layouts.master')
 
@section('sidebar')
     @parent
     Lista de Especies
@stop
 
@section('content')
        <h1>Especies</h1>
        {{ HTML::link('especies/nuevo', 'Crear Especie'); }}
 
<ul>
  @foreach($especies as $especie)
           <li>
    {{ HTML::link( 'especies/'.$especie->id , $especie->nombreesp.' '.$especie->author.' '.$especie->idsinonimo ) }}
      
  </li>
          @endforeach
  </ul>
@stop
