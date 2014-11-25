@extends('layouts.master')
 
@section('sidebar')
     @parent
     Lista de familias
@stop
 
@section('content')
        <h1>Familias</h1>
        {{ HTML::link('familias/nuevo', 'Crear Familia'); }}
 
<ul>
  @foreach($familias as $familia)
           <li>
    {{ HTML::link( 'familias/'.$familia->id , $familia->nombrefam) }}
      
  </li>
          @endforeach
  </ul>
@stop
