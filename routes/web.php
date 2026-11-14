<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return "Home Page";
});

Route::get('/health', function(){

    
    return response()->json([
       'status' => 'ok',
       'service' => 'addis-eats-api',
       'timestamp' => now()
    ]);
});

Route::get('/test', function(){

    $name = 'John';
    echo ($name."\n");
    var_dump($name);

    $fees = ['Bole' => 4500, 'Piassa' => 6000, 'CMC' => 8000];

    $withVat = array_map(fn($f) =>  floatval($f*1 +$f),$fees);
    return $withVat;
    $cheap = array_filter($fees,fn($f)=> $f <10000);
    return $cheap;
    return response()->json([
        'status' => 'ok',
        'service' => 'addis-eats-api',
        'timestamp' => now()
    ]);

    

});

    
