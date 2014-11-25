<?php 
class Familia extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'familia';
    protected $fillable = array('nombrefam');
}
?>