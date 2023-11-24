<?php

namespace Aula\DesignPattern\Descontos;

use Aula\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto (Orcamento $orcamento):float
    {
        if ($orcamento -> valor > 500){
            return $orcamento -> valor *0.5;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}