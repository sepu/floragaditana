<?php 
class FotoEspecie extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'fotoesp';
    protected $fillable = array('nombrefoto', 'idespecie');

    
    // Relacion Pertenece A (deriva de una relación Uno a Muchos en Especie)
    public function especie()
    {
        return $this->belongsTo('Especie', 'idespecie');
        // La relación Pertenece A se declara con la función belongsTo
        // esta acepta dos parámetros
        // El primero es la tabla a donde pertecene la relación
        // El segundo es el id de la tabla padre en la tabla actual
        // En este caso seria el id de Especie en FotoEspecie 
    }
}
?>