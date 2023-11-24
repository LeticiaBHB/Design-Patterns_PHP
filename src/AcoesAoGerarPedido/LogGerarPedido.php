<?php

namespace Aula\DesignPattern\AcoesAoGerarPedido;

use Aula\DesignPattern\Pedido;

class LogGerarPedido implements AcoesAposGerarPedido
{
    public function executaAcao (Pedido $pedido): void{
        echo "Gerando Log de geração de pedido";
    }
}