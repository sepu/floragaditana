<?php 
class Especie extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'especie';
    protected $fillable = array('nombreesp', 'author', 'protegida', 'idsinonimo', 'hibrido', 'idpadre', 'idmadre');
}
?>