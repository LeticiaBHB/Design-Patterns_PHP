<?php

namespace Aula\DesignPattern;

use Aula\DesignPattern\AcoesAoGerarPedido\AcoesAposGerarPedido;
use Aula\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Aula\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Aula\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /**@var AcoesAoGerarPedido[]*/
    private array $acoesAposGerarPedido = [];
    public function __construct(/*PedidoRepository, MailService*/){
    }

    public function adicionarAcaoAoGerarPedido(AcoesAposGerarPedido $acao){
        $this -> acoesAposGerarPedido[] = $acao;
    }
    public function execute ( GerarPedido $gerarPedido){
            $orcamento = new Orcamento();
            $orcamento -> quantidadeItens = $gerarPedido -> getNumeroItens();
            $orcamento -> valor = $gerarPedido -> getValorOrcamento();

            $pedido = new Pedido();
            $pedido -> dataFinalizacao = new \DateTimeImmutable();
            $pedido -> nomeCliente = $gerarPedido -> getValorOrcamento();
            $pedido -> orcamento= $orcamento;


//            //PedidosRepository
//            echo "Cria pedido no banco da dados" . PHP_EOL;
//
//            //MailService
//            echo "Envia e-mail para cliente". PHP_EOL;
//
//            echo"Gerar log de criação de pedido" . PHP_EQL;

//            $pedidosRepository = new CriarPedidoNoBanco();
//            $logGerarPedido = new LogGerarPedido();
//            $enviarPedidoPorEmail = new EnviarPedidoPorEmail();
//
//            $pedidosRepository -> executaAcao($pedido);
//            $logGerarPedido -> executaAcao($pedido);
//            $enviarPedidoPorEmail -> executaAcao($pedido);

        foreach ($this -> acoesAposGerarPedido as $acao){
            $acao->executaAcao ($pedido);
        }
    }
}