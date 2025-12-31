<?php

use Illuminate\Support\Facades\Route;
use App\Events\EventTeste;
use App\Events\EventExemple;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/web/{msg}', function($msg){
    event(new EventExemple($msg));
    return response()->json(['message' => 'Ok, funcionou!'], 200);
}); 