<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;
use PHPUnit\Event\Telemetry\System;

Route::get('/formulario', function () {

    return view('form');

});




Route::get('/contacto', function (Request $request) {
    echo "<pre>";
    print_r($request -> get("nombre"));
    echo "</pre>";


});

Route::get('/php-basico', function () {

    echo "<h1> Variables... </h1>";

    $nombre = "Abigail Vargas";
    $apellido = "Vargas";
    $nombre_completo = $nombre . " " . $apellido;
    $age = rand(10,60);
    $height = 1.61;
    $isLogin = (bool) rand(0,1);

    echo $nombre_completo; 

    echo "<br><h2> ***************** ESTRUCTURA DE DATOS ***************** </h2><br>";

    $message = "Soy $nombre_completo, tengo $age años y mido $height metros. <br>";

    if ($age <18) {
        $message = $message . "<br> Soy menor de edad. <br>";
    }
    else if ($age >50 ){
        $message = $message . "<br> Soy un adulto mayor. <br>";
    }
    else {
        $message = $message . "<br> Soy un adulto. <br>";
    }

    echo $message;

    $message .= " ".($isLogin ? "Estoy logueado" : "No estoy logueado").".<br>";

    echo "<br><h2>****************** FUNCIONES ****************** </h2><br>";

    echo printUser($nombre, $age);

    $productsNames = ["Laptop", "Tablet", "Monitor", 25, true];
    $teclado = [
        'name' => 'Teclado Mecánico',
        'marca' => 'Logitech',
        'precio' => 150000,
        'distribuciones'=>[
            'Latino',
            'España',
            'Estados Unidos',
        ]
    ];

    echo $teclado['name'];

    foreach ($productsNames as $item){
        echo "<br> $item";
    }


});

Function printUser(string $nombre, int $age){
    return "$nombre tiene $age años.";
}
