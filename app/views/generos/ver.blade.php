@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de genero
@stop
 
@section('content')
        {{ HTML::link('generos', 'Volver'); }}
        <h1>
  Usuario {{$genero->id}}
      
</h1>
        
        {{ $genero->nombregen .' '.$genero->idfamilia }}
        
<br />
        {{ $genero->created_at}}
@stop