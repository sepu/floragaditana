<?php 
class Color extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'color';
    protected $fillable = array('nombrecolor');

    // Relación Muchos a Muchos. Una especie puede pertenecer a varios Colores y un Color contiene varias Especies.
    public function especies(){
        return $this->belongsToMany('Especie', 'rel_col_esp', 'idespecie', 'idcolor');
}
?>