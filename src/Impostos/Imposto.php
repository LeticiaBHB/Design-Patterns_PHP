<?php

namespace Aula\DesignPattern\Impostos;

use Aula\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento  $orcamento):float;

}