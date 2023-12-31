<?php

namespace Aula\DesignPattern\Impostos;

use Aula\DesignPattern\Orcamento;

class IPI extends  ImpostoCom2Aliquotas
{
//    public function calculaImposto(Orcamento $orcamento): float
//    {
//        if ($orcamento -> valor > 500){
//            return  $orcamento -> valor *0.03;
//        }
//        return $orcamento->valor *0.02;
//    }
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor >500;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

}
