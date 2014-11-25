<?php 
class Genero extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'genero';
    protected $fillable = array('nombregen', 'idfamilia');
}
?>