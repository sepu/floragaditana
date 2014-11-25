@extends('layouts.master')
 
@section('sidebar')
     @parent
     Lista de fotografías para una especie
@stop
 
@section('content')
        <h1>Fotografias de una especie</h1>
        {{ HTML::link('fotosespecie/nuevo', 'Añadir una imagen'); }}
 
<ul>
  @foreach($fotos as $foto)
           <li>
    {{ HTML::link( 'fotosespecie/'.$foto->id , $foto->nombrefoto.' '.$foto->idespecie ) }}
      
  </li>
          @endforeach
  </ul>
@stop
