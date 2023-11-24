<?php

use Aula\DesignPattern\CalculadoraDeImpostos;
use Aula\DesignPattern\Impostos\Icms;
use Aula\DesignPattern\Orcamento;

require  'vendor/autoload.php';
//
//$calculadora = new CalculadoraDeImpostos();
//$orcamento = new  Orcamento();
//$orcamento -> valor = 100;
//
//echo $calculadora->calcula($orcamento, new Icms());


$calculadora = new \Aula\DesignPattern\CalculadoradeDescontos();
$orcamento = new Orcamento();
$orcamento -> valor = 600;
$orcamento ->quantidadeItens = 6;
echo $calculadora -> calculaDescontos($orcamento);