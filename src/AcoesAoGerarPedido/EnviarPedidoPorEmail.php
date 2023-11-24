<?php

namespace Aula\DesignPattern\AcoesAoGerarPedido;

use Aula\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update (\SplSubject $pedido): void{
        echo $pedido->pedido->nomeCliente;
        echo "Enviando email de pedido gerado";
    }
}