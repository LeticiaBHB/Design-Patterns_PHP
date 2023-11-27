<?php

use Aula\DesignPattern\ListaDeOrcamentos;
use Aula\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens=7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens=3;
$orcamento2->reprovado();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens=5;
$orcamento3->finalizado();
$orcamento3->valor = 1350;

//$listaOrcamentos = [
//    $orcamento1.
//    $orcamento2,
//    $orcamento3
//];
$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento){
    echo 'Valor:'. $orcamento->valor . PHP_EOL;
    echo  'Estado:'.get_class($orcamento->estadoAtual) . PHP_EOL;
    echo 'Qtd.Itens'.$orcamento->quantidadeItens . PHP_EOL;
    echo PHP_EOL;
}