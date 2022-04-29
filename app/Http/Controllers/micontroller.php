<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class  micontroller extends Controller {
    public function prueba(){
        return 'estoy en un controlador';
    }

    public function saludo($nombre){

        return 'hola mi nombre es: ' . $nombre;
    }

    public function heladeria($topping,$precio,$total){
        return 'el topping escogido es :'.$topping. ' y su precio es $'.$precio.' el valor total es: $'.$total;
    }




}

?>
