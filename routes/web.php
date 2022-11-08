<?php

use App\Http\Controllers\Crud;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Routing 

route::get('/index', function(){   
      return "Omar kandil";
     } );  

//Routing with 1 Parametre


  // Route::get('/index/{id}',function($age){ 
  //   return "Mon age est :  $age ans"; }); 

   // Routing with 2 Parametre 

    // Route::get('/index/{id}/{name}',function($id,$name){ 
    //     return "ID : $id <br> Name : $name"; });


// Route::get('/select', [Crud::class,'select']);


// Route::get('/add',[Crud::class,'add']);


// Route::get('/insert',[Crud::class,'insert']);



// Route::get('/',[Crud::class,'select']);

// Route::get('/add', [Crud::class, 'add']);

// Route::get('/insert', [Crud::class, 'insert']);


