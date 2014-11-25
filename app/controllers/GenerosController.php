<?php 
 
class GenerosController extends BaseController {
 
    /**
     * Muestra la lista con todos los generos
     */
    public function mostrarGenero()
    {
        $generos = Genero::all();
        return View::make('generos.lista', array('generos' => $generos));
    }
 
 
    /**
     * Muestra formulario para crear Genero
     */
    public function nuevoGenero()
    {
        return View::make('generos.crear');
    }
 
 
    /**
     * Crear el genero nuevo
     */
    public function crearGenero()
    {
        Genero::create(Input::all());
    // el método create nos permite crear un nuevo genero en la base de datos, este método es proporcionado por Laravel
    // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos 
    // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()
 
        return Redirect::to('generos');
    // el método redirect nos devuelve a la ruta de mostrar la lista de los generos
 
    }
 
     /**
     * Ver genero con id
     */
    public function verGenero($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id del genero que se desea buscar y se debe declarar en la ruta como un parámetro 
    
        $genero = Genero::find($id);
        // para buscar al genero utilizamos el metido find que nos proporciona Laravel 
        // este método devuelve un objete con toda la información que contiene un genero
    
    return View::make('generos.ver', array('genero' => $genero));
    }
 
}
?>