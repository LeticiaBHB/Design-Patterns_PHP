<?php

namespace Aula\DesignPattern\AcoesAoGerarPedido;

use Aula\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcoesAposGerarPedido
{
    public function executaAcao (Pedido $pedido): void{
        echo "Enviando email de pedido gerado";
    }
}