<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class pruebaController extends Controller{
    public function prueba($param){
        return 'estoy dentro de la prueba y consegui'.$param;
    }
}

?>