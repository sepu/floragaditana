<?php 
 
class EspeciesController extends BaseController {
 
    /**
     * Muestra la lista con todos los especies
     */
    public function mostrarEspecie()
    {
        $especies = Especie::all();
        return View::make('especies.lista', array('especies' => $especies));
    }
 
 
    /**
     * Muestra formulario para crear Especie
     */
    public function nuevoEspecie()
    {
        return View::make('especies.crear');
    }
 
 
    /**
     * Crear el especie nuevo
     */
    public function crearEspecie()
    {
        Especie::create(Input::all());
    // el método create nos permite crear un nuevo especie en la base de datos, este método es proporcionado por Laravel
    // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos 
    // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()
 
        return Redirect::to('especies');
    // el método redirect nos devuelve a la ruta de mostrar la lista de los especies
 
    }
 
     /**
     * Ver especie con id
     */
    public function verEspecie($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id del especie que se desea buscar y se debe declarar en la ruta como un parámetro 
    
        $especie = Especie::find($id);
        // para buscar al especie utilizamos el metido find que nos proporciona Laravel 
        // este método devuelve un objete con toda la información que contiene un especie
    
    return View::make('especies.ver', array('especie' => $especie));
    }
 
}
?>