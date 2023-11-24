<?php

namespace Aula\DesignPattern\Impostos;

use Aula\DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float{
        return $orcamento->valor *0.6;
    }

}