<?php 
class Color extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'color';
    protected $fillable = array('nombrecolor');
}
?>