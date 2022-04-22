<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ControladorPrecios extends Controller
{
    public function pruducto($valor){
        $total = 0;
        $producto = '';

        if ($valor < 100000 and $valor > 0){
            echo 'el producto no tiene decuento';
        }
        elseif($valor > 99999 and $valor < 150001){
            $decuento = $valor * 0.02;
            $total =  $valor - $decuento ;
            echo 'al producto se le desconto el 2% y el total a pagar es: '.$total;
        }
        elseif($valor > 150000 and $valor < 300001){
            $decuento = $valor * 0.03;
            $total =  $valor - $decuento ;
            echo 'al producto se le desconto el 3% y el total a pagar es: '.$total;
        }
        elseif($valor > 300000 and $valor < 500001){
            $decuento = $valor * 0.04;
            $total =  $valor - $decuento ;
            echo 'al producto se le desconto el 4% y el total a pagar es: '.$total;
        }
        elseif($valor > 500000){
            $decuento = $valor * 0.05;
            $total =  $valor - $decuento ;
            echo 'al producto se le desconto el 5% y el total a pagar es: '.$total;
        }
        else{
            echo 'El valor ingresado es incorrecto. Inténtelo nuevamente';
        }
    }
    public function getIVA($produc,$valor){
        define('IVA', $valor * 0.19);
        $total = $valor + IVA;
        echo 'El artículo '.$produc.' sin IVA cuesta $'.$valor.' y el precio del IVA es de $'.IVA.'. El
        total a pagar por el artículo es de $'.$total;
    }
}
