<?php

require_once app_path('Support/pricing.php');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/health',function(){
    return response()->json([
        'status' => 'ok',
        'service' => 'addis-eats-api',
        'time' => now()
    ]);
});

Route::get('/quote',function(){
    $lines = [
   ['item'=> 'Doro Wat', 'qty'=> 2, 'price'=> 18000],
   ['item'=> 'Tibs', 'qty'=> 1, 'price'=> 22000],
    ['item'=> 'shiro', 'qty'=> 3, 'price'=> 22000]
];
    $area = 'Bole';
    $quote = orderTotal($lines, $area);
    return response()->json($quote);
});