<?php

namespace Aula\DesignPattern\AcoesAoGerarPedido;

use Aula\DesignPattern\Pedido;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update (\SplSubject $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}