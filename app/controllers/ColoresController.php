<?php 
 
class ColoresController extends BaseController {
 
    /**
     * Muestra la lista con todos los colores
     */
    public function mostrarColor()
    {
        $colores = Color::all();
        return View::make('colores.lista', array('colores' => $colores));
    }
 
 
    /**
     * Muestra formulario para crear Color
     */
    public function nuevoColor()
    {
        return View::make('colores.crear');
    }
 
 
    /**
     * Crear el color nuevo
     */
    public function crearColor()
    {
        Color::create(Input::all());
    // el método create nos permite crear un nuevo color en la base de datos, este método es proporcionado por Laravel
    // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos 
    // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()
 
        return Redirect::to('colores');
    // el método redirect nos devuelve a la ruta de mostrar la lista de los colores
 
    }
 
     /**
     * Ver color con id
     */
    public function verColor($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id del color que se desea buscar y se debe declarar en la ruta como un parámetro 
    
        $color = Color::find($id);
        // para buscar al color utilizamos el metido find que nos proporciona Laravel 
        // este método devuelve un objete con toda la información que contiene un color
    
    return View::make('colores.ver', array('color' => $color));
    }
 
}
?>