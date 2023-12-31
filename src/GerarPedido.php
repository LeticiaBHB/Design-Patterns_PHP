<?php

namespace Aula\DesignPattern;

class GerarPedido //implements Command
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(
    float $valorOrcamento,
    int $numeroItens,
    string $nomeCliente

){

        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }
//    public function execute(){
//        $orcamento = new Orcamento();
//        $orcamento -> quantidadeItens = $this -> numeroItens;
//        $orcamento -> valor = $this -> valorOrcamento;
//
//        $pedido = new Pedido();
//        $pedido -> dataFinalizacao = new \DateTimeImmutable();
//        $pedido -> nomeCliente = $this -> nomeCliente;
//        $pedido -> orcamento= $orcamento;
//
//        echo "Cria pedido no banco da dados" . PHP_EOL;
//        echo "Envia e-mail para cliente". PHP_EOL;
//    }
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getNumeroItens(): int
    {
        return $this->numeroItens;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

}