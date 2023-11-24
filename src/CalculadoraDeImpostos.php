<?php

namespace Aula\DesignPattern;

use Aula\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float{
        return $imposto->calculaImposto($orcamento);
//        switch ($nomeImposto){
//            case "ICMS":
//                return $orcamento -> valor * 0.1;
//            case "ISS":
//                return $orcamento->valor * 0.06;
//        }
    }
}