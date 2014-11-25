@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de familia
@stop
 
@section('content')
        {{ HTML::link('familias', 'Volver'); }}
        <h1>
  Familia {{$familia->id}}
      
</h1>
        
        {{ $familia->nombrefam}}
        
<br />
        {{ $familia->created_at}}
@stop