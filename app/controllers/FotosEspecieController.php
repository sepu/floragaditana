<?php 
 
class FotosEspecieController extends BaseController {
 
    /**
     * Muestra la lista con todas las fotos de una especie
     */
    public function mostrarFotos()
    {
        $fotos = Usuario::all();
        return View::make('fotos.lista', array('fotos' => $fotos));
    }
 
 
    /**
     * Muestra formulario para crear una nueva foto para una especie
     */
    public function nuevaFoto()
    {
        return View::make('fotos.crear');
    }
 
 
    /**
     * Crear la foto nueva para una especie
     */
    public function crearFoto()
    {
        FotoEspecie::create(Input::all());
    // el método create nos permite añadir una nueva foto para una especie en la base de datos, este método es proporcionado por Laravel
    // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos 
    // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()
 
        return Redirect::to('fotos');
    // el método redirect nos devuelve a la ruta de mostrar la lista fotos asignadas a una especie
    }
 
     /**
     * Ver foto con id
     */
    public function verFoto($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id de la foto que se desea buscar y se debe declarar en la ruta como un parámetro 
    
        $foto = FotoEspecie::find($id);
        // para buscar la foto utilizamos el metido find que nos proporciona Laravel 
        // este método devuelve un objete con toda la información que contiene una foto de una especie
    
    return View::make('fotos.ver', array('foto' => $foto));
    }
 
}
?>