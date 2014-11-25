<?php 
 
class FamiliasController extends BaseController {
 
    /**
     * Muestra la lista con todas las familias
     */
    public function mostrarFamilias()
    {
        $familias = Familia::all();
        return View::make('familias.lista', array('familias' => $familias));
    }
 
 
    /**
     * Muestra formulario para crear una nueva familia
     */
    public function nuevaFamilia()
    {
        return View::make('familias.crear');
    }
 
 
    /**
     * Crear la familia nueva
     */
    public function crearFamilia()
    {
        Familia::create(Input::all());
    // el método create nos permite crear un nueva familia en la base de datos, este método es proporcionado por Laravel
    // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos 
    // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()
 
        return Redirect::to('familias');
    // el método redirect nos devuelve a la ruta de mostrar la lista de familias existentes
 
    }
 
     /**
     * Ver familia con id
     */
    public function verFamilia($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id de la familia que se desea buscar y se debe declarar en la ruta como un parámetro 
    
        $familia = Familia::find($id);
        // para buscar al usuario utilizamos el metido find que nos proporciona Laravel 
        // este método devuelve un objeto con toda la información que contiene una familia
    
    return View::make('familias.ver', array('familia' => $familia));
    }
 
}
?>