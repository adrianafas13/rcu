<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permission\Model\Role;


Route::get('/', function () { 
    
    return view('welcome');
});

Route::get('/main', function () { 
    
    return view('main');
});

Route::get('/articulo', function () { 
    
    return view('article');
});
Route::get('/autores', function () { 
    
    return view('authorsCatalog');
});

Route::get('/informacion', function () { 
    
    return view('info');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    /*
    return Role::create([
        'name'=>'Admin',
        'slug'=>'admin',
        'description'=>'Administrator',
        'full-access'=>'yes'
    ]);

    return Role::create([
        'name'=>'Editor',
        'slug'=>'editor',
        'description'=>'Editor',
        'full-access'=>'no'
    ]);

    return Role::create([
        'name'=>'Guest',
        'slug'=>'guest',
        'description'=>'guest',
        'full-access'=>'no'
    ]);
    */
     
    $user = User::find(1);
        return $user;

});