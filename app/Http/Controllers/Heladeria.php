<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class heladeria extends Controller
{
    public function helados($opcion){
        $helado = 3000;
        $topping = '';
        $precio = 0;
        $total = 0;

        if ($opcion == 1) {
            $topping = 'chocolate';
            $precio = 500;
        }
        elseif($opcion == 2) {
            $topping = 'Brownie';
            $precio = 1000;
        }
        elseif($opcion == 3) {
            $topping = 'Delicatessen';
            $precio = 1500;
        }
        else{
            echo 'Opcion no valida, ';
        }

        $total = $helado + $precio;

        return 'El topping escogido es: '.$topping.', el valor total a pagar por el helado es $'.$total;

    }
}
