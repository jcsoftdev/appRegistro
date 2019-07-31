<?php


Route::get('/', function () {
    return view('contents.contenido');
});
// Route::get('/', function () {
//     return view('vistas/contenido');
// });
Route::get('/curso', 'CursoController@index');

Route::get('/docente', 'HomeController@docente')->name('docente');
Route::get('/estudiante', 'HomeController@estudiante')->name('estudiante');
//Route::get('/regUsuario', 'HomeController@usuario')->name('regUsuario');


Route::get('/regArapoderado', 'HomeController@showRegApoderado')->name('regApoderado');
Route::post('/regArapoderado', 'apoderadosController@store');

//ejem
/*Route::get('/datos', function () {
    $datos= RegistroAsistencia\Models\apoderado::all();
    //return view('index');
});
*/

Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

if ($options['register'] ?? true) {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
}
Route::get('register', 'HomeController@usuario')->name('registrar');
Route::post('register', 'Auth\RegisterController@register')->name('registrar');


// Password Reset Routes...
if ($options['reset'] ?? true) {
    Route::resetPassword();
}

// Email Verification Routes...
if ($options['verify'] ?? false) {
    Route::emailVerification();
}

Route::get('/home', 'HomeController@index')->name('home');
