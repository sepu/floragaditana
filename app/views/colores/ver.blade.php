@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de color
@stop
 
@section('content')
        {{ HTML::link('colores', 'Volver'); }}
        <h1>
  Usuario {{$color->id}}
      
</h1>
        
        {{ $color->nombrecolor }}
        
<br />
        {{ $color->created_at}}
@stop