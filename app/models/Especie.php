<?php 
class Especie extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'especie';
    protected $fillable = array('nombreesp', 'author', 'protegida', 'idsinonimo', 'hibrido', 'idpadre', 'idmadre');


    // Para declarar una relación uno a uno se utiliza la función hasOne().
    // Esta función recibe como primer parámetro el modelo con el cual queremos hacer la relación 
    // en este caso es a si mismo, Especie.
    // El segundo parámetro es el campo id con el cual se relación el modelo. 
    // En este caso Eloquent busca el pasaporte que tenga persona_id igual al 
    // id de la Persona

    // Definimos las relaciones con otras claves.
	// Relación cero a uno con el padre y la madre de un híbrido:
	public function hibridoPadre(){
        return $this->hasOne('Especie', 'idpadre');
    }

    public function hibridoMadre(){
        return $this->hasOne('Especie', 'idmadre');
    }

    //Relación Uno a Muchos. Una especie puede tener varias fotos:
    public function fotos(){
        return $this->hasMany('FotoEspecie', 'id');

    // Relación Muchos a Muchos. Una especie puede pertenecer a varios generos y un genero contiene varias especies.
    public function generos(){
        return $this->belongsToMany('Genero', 'rel_gen_esp', 'idgenero', 'idespecie');
    }

    // Relación Muchos a Muchos. Una especie puede pertenecer a varios Colores y un Color contiene varias Especies.
    public function colores(){
        return $this->belongsToMany('Color', 'rel_col_esp', 'idcolor', 'idespecie');
}
?>