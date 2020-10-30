<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/acerca', function(){
	return view('acerca');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tratamiento','HomeController@tratamiento');

Route::resource('/usuarios','UsersController');
Route::get('/tableusers','UsersController@datatable')->name('table.users');
Route::resource('/roles','RolesController');
Route::get('/tableroles','RolesController@datatable')->name('table.roles');
Route::resource('/farmacias','farmaciasController');
Route::get('/tablefarmacia','farmaciasController@datatable')->name('table.farmacia');
Route::get('/busquedafarmacia','farmaciasController@farmacias');
Route::get('/buscar','farmaciasController@search');


Route::get('/miPerfil/{usuario}','PerfilController@miPerfil')->name('usuario.perfil');
Route::get('/configuracion/{usuario}','PerfilController@miConfiguracion')->name('usuario.perfil');
Route::put('/actualizar/{usuario}','PerfilController@actualizarDatos')->name('actualizar.datos');
Route::put('/cambiarPassword/{usuario}','PerfilController@cambiarPassword')->name('cambiar.password');

route::resource('/rutinas','RutinasController');
route::resource('/sintomas','SintomasController');
route::resource('/medicamentos','MedicamentosController');
route::get('/tablemedicamentos','MedicamentosController@datatable')->name('table.medicamentos');