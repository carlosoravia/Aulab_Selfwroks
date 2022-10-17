<?php

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

// pagina principale 
Route::get('/', function () {
    return view('welcome');
});

// pagina dei contatti
Route::get('/contatti', function(){

    $contacts = [

        [
            'name'=> 'valery',
            'surname'=> 'pislov',
            'age'=> '25'
        ],
        [
            'name'=> 'angelo',
            'surname'=> 'mammo',
            'age'=> '26'
        ],
        [
            'name'=> 'carlo',
            'surname'=> 'soravia',
            'age'=> '23'
        ],
        [
            'name'=> 'gianluca',
            'surname'=> 'napoli',
            'age'=> '29'
        ]
    ];
    return view('contatti', ['contacts' => $contacts]);
});


