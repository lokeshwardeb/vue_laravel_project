<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', inertia('HelloWorld', ));

Route::get('/', function(){
    return Inertia::render('HelloWorld');
});

Route::get('/test', function(){
    return  Inertia::render('Test', [
        'user' => 'protik'
      ]);
});

Route::inertia('/form', 'Form');

// Route::post('/form', []);


// Route::get('/', function(){
//     return  Inertia::render('HelloWorld', [
//         'user' => 'protik'
//       ]);
// });
