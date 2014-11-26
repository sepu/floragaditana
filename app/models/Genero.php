<?php 
class Genero extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'genero';
    protected $fillable = array('nombregen', 'idfamilia');

    // Relación Muchos a Muchos. Una especie puede pertenecer a varios generos y un genero contiene varias especies.
    public function especies(){
        return $this->belongsToMany('Especie', 'rel_gen_esp', 'idespecie', 'idgenero');
}
?>