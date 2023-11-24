<?php

namespace Aula\DesignPattern\AcoesAoGerarPedido;

use Aula\DesignPattern\Pedido;

class LogGerarPedido implements \SplObserver
{
    public function update (\SplSubject $pedido): void{
        echo "Gerando Log de geração de pedido";
    }
}