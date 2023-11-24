<?php

namespace Aula\DesignPattern\AcoesAoGerarPedido;

use Aula\DesignPattern\Pedido;

interface AcoesAposGerarPedido
{
    public function executaAcao (Pedido $pedido): void;
}