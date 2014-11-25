<?php 
class FotoEspecie extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'fotoesp';
    protected $fillable = array('nombrefoto', 'idespecie');
}
?>