@extends('layouts.master')
 
@section('sidebar')
     @parent
     Lista de usuarios
@stop
 
@section('content')
        <h1>Usuarios</h1>
        {{ HTML::link('usuarios/nuevo', 'Crear Usuario'); }}
 
<ul>
  @foreach($usuarios as $usuario)
           <li>
    {{ HTML::link( 'usuarios/'.$usuario->id , $usuario->username.' '.$usuario->email ) }}
      
  </li>
          @endforeach
  </ul>
@stop
