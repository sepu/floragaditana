<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//USUARIOS

Route::get('usuarios', array('uses' => 'UsuariosController@mostrarUsuarios'));

Route::get('usuarios/nuevo', array('uses' => 'UsuariosController@nuevoUsuario'));
 
Route::post('usuarios/crear', array('uses' => 'UsuariosController@crearUsuario'));
// esta ruta es a la cual apunta el formulario donde se introduce la información del usuario 
// como podemos observar es para recibir peticiones POST 
 
Route::get('usuarios/{id}', array('uses'=>'UsuariosController@verUsuario'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id del usuario que deseamos buscar 
// este parámetro es pasado al controlador, podemos colocar todos los parámetros que necesitemos 
// solo hay que tomar en cuenta que los parámetros van entre llaves {}
// si el parámetro es opcional se colocar un signo de interrogación {parámetro?}

// -------- FAMILIAS -------------

Route::get('familias', array('uses' => 'FamiliasController@mostrarFamilias'));

Route::get('familias/nuevo', array('uses' => 'FamiliasController@nuevaFamilia'));
 
Route::post('familias/crear', array('uses' => 'FamiliasController@crearFamilia'));
// esta ruta es a la cual apunta el formulario donde se introduce la información de la familia 
// como podemos observar es para recibir peticiones POST 
 
Route::get('familias/{id}', array('uses'=>'FamiliasController@verFamilia'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id de la familia que deseamos buscar 
// este parámetro es pasado al controlador, podemos colocar todos los parámetros que necesitemos 
// solo hay que tomar en cuenta que los parámetros van entre llaves {}
// si el parámetro es opcional se colocar un signo de interrogación {parámetro?}

// -------- GENEROS -------------

Route::get('generos', array('uses' => 'GenerosController@mostrarGeneros'));

Route::get('generos/nuevo', array('uses' => 'GenerosController@nuevoGenero'));
 
Route::post('generos/crear', array('uses' => 'GenerosController@crearGenero'));
// esta ruta es a la cual apunta el formulario donde se introduce la información del genero 
// como podemos observar es para recibir peticiones POST 
 
Route::get('generos/{id}', array('uses'=>'GenerosController@verGenero'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id del genero que deseamos buscar 
// este parámetro es pasado al controlador, podemos colocar todos los parámetros que necesitemos 
// solo hay que tomar en cuenta que los parámetros van entre llaves {}
// si el parámetro es opcional se colocar un signo de interrogación {parámetro?}

// -------- FOTOS DE ESPECIE -------------


Route::get('fotosespecie', array('uses' => 'FotosEspecieController@mostrarFotos'));

Route::get('fotosespecie/nuevo', array('uses' => 'FotosEspecieController@nuevaFoto'));
 
Route::post('fotosespecie/crear', array('uses' => 'FotosEspecieController@crearFoto'));
// esta ruta es a la cual apunta el formulario donde se introduce la información de la imagen de la especie 
// como podemos observar es para recibir peticiones POST 
 
Route::get('fotosespecie/{id}', array('uses'=>'FotosEspecieController@verFoto'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id de la imagen de la especie que deseamos buscar 
// este parámetro es pasado al controlador, podemos colocar todos los parámetros que necesitemos 
// solo hay que tomar en cuenta que los parámetros van entre llaves {}
// si el parámetro es opcional se colocar un signo de interrogación {parámetro?}

// -------- COLORES -------------

Route::get('colores', array('uses' => 'ColoresController@mostrarColores'));

Route::get('colores/nuevo', array('uses' => 'ColoresController@nuevoColor'));
 
Route::post('colores/crear', array('uses' => 'ColoresController@crearColor'));
// esta ruta es a la cual apunta el formulario donde se introduce la información del color 
// como podemos observar es para recibir peticiones POST 
 
Route::get('colores/{id}', array('uses'=>'ColoresController@verColor'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id del color que deseamos buscar 
// este parámetro es pasado al controlador, podemos colocar todos los parámetros que necesitemos 
// solo hay que tomar en cuenta que los parámetros van entre llaves {}
// si el parámetro es opcional se colocar un signo de interrogación {parámetro?}

// -------- ESPECIES -------------

Route::get('especies', array('uses' => 'EspeciesController@mostrarEspecies'));

Route::get('especies/nuevo', array('uses' => 'EspeciesController@nuevoEspecie'));
 
Route::post('especies/crear', array('uses' => 'EspeciesController@crearEspecie'));
// esta ruta es a la cual apunta el formulario donde se introduce la información de la especie 
// como podemos observar es para recibir peticiones POST 
 
Route::get('especies/{id}', array('uses'=>'EspeciesController@verEspecie'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id de la especie que deseamos buscar 
// este parámetro es pasado al controlador, podemos colocar todos los parámetros que necesitemos 
// solo hay que tomar en cuenta que los parámetros van entre llaves {}
// si el parámetro es opcional se colocar un signo de interrogación {parámetro?}