<?php 
class Usuario extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'user';
    protected $fillable = array('username', 'password', 'email');
}
?>