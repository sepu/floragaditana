<h1>
  Usuarios
  
</h1>
 
 
<ul>
  @foreach($usuarios as $usuario)
  <!-- Equivalente en Blade a <?php //foreach ($usuarios as $usuario) ?> -->
    <li>
      {{ $usuario->username.' '.$usuario->email }} 
    </li>
    <!-- Equivalente en Blade a <?php //echo $usuario->username.' '.$usuario->email ?> -->
  @endforeach 
</ul>
