<?php

namespace Aula\DesignPattern\EstadosOrcamento;

use Aula\DesignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public  function calculaDescontoExtra(Orcamento $orcamento): float{
        return $orcamento->valor * 0.02;
    }
    public function finaliza (Orcamento $orcamento){
        $orcamento -> estadoAtual = new Finalizado();
    }
}