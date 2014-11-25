@extends('layouts.master')
 
@section('sidebar')
     @parent
     Lista de Colores
@stop
 
@section('content')
        <h1>Colores</h1>
        {{ HTML::link('colores/nuevo', 'Crear Color'); }}
 
<ul>
  @foreach($colores as $color)
           <li>
    {{ HTML::link( 'colores/'.$color->id , $color->nombrecolor ) }}
      
  </li>
          @endforeach
  </ul>
@stop
