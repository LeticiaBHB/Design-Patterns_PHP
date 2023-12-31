<?php
require_once 'vendor/autoload.php';

use Aula\DesignPattern\{AcoesAoGerarPedido\CriarPedidoNoBanco,
    AcoesAoGerarPedido\EnviarPedidoPorEmail,
    AcoesAoGerarPedido\LogGerarPedido,
    GerarPedido,
    GerarPedidoHandler,
    Orcamento,
    Pedido};
$valorOrcamento = $argv [1];
$numeroDeItens = $argv [2];
$nomeCliente = $argv [3];

//$orcamento = new Orcamento();
//$orcamento -> quantidadeItens = $numeroDeItens;
//$orcamento -> valor = $valorOrcamento;
//
//$pedido = new Pedido();
//$pedido -> dataFinalizacao = new \DateTimeImmutable();
//$pedido -> nomeCliente = $nomeCliente;
//$pedido -> orcamento= $orcamento;
//
//echo "Cria pedido no banco da dados" . PHP_EOL;
//echo "Envia e-mail para cliente" . PHP_EOL;

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
//$gerarPedido -> execute();
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler ->attach(new EnviarPedidoPorEmail());
$gerarPedidoHandler ->attach(new CriarPedidoNoBanco());
$gerarPedidoHandler ->attach(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);