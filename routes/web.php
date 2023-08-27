<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


Route::get('/', function () {
//    $img = Image::make('demo.jpg')->resize(300, 200);
//    return $img->response('jpg');
    return view('welcome');
});

Route::post('/', function (Request $request) {
    dd($request->all());
});
