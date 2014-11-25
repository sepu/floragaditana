@extends('layouts.master')
 
@section('sidebar')
     @parent
     Lista de Generos
@stop
 
@section('content')
        <h1>Generos</h1>
        {{ HTML::link('generos/nuevo', 'Crear Genero'); }}
 
<ul>
  @foreach($generos as $genero)
           <li>
    {{ HTML::link( 'generos/'.$genero->id , $genero->nombregen.' '.$genero->idfamilia ) }}
      
  </li>
          @endforeach
  </ul>
@stop
