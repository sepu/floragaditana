@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de Fotografías de una especie
@stop
 
@section('content')
        {{ HTML::link('fotos', 'Volver'); }}
        <h1>
  Usuario {{$foto->id}}
      
</h1>
        
        {{ $foto->nombrefoto .' '.$foto->idespecie }}
        
<br />
        {{ $foto->created_at}}
@stop