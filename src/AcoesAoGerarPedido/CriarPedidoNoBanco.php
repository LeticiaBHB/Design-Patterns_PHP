<?php

namespace Aula\DesignPattern\AcoesAoGerarPedido;

use Aula\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcoesAposGerarPedido
{
    public function executaAcao (Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}