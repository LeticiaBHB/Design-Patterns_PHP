<?php

namespace Aula\DesignPattern\Impostos;

use Aula\DesignPattern\Orcamento;

class IPVA extends ImpostoCom2Aliquotas
{
//    public function calculaImposto(Orcamento $orcamento): float
//    {
//        if ($this->deveAplicarTaxaMaxima($orcamento)){
//            return $this->calculaTaxaMaxima($orcamento);
//        }
//        return $this->calculaTaxaMinima($orcamento);
//    }


    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }
    
    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }

}