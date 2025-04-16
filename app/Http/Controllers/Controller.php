<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public $saludo = "Hola desde el controlador base";
    public function __construct()
    {
        // Constructor de la clase base
        // Puedes inicializar propiedades o realizar acciones comunes aquí
    }
}
