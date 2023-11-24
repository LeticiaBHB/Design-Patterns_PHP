<?php

namespace Aula\DesignPattern;

use Aula\DesignPattern\EstadosOrcamento\EmAprovacao;
use Aula\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;

//    public string  $estadoAtual;
    public EstadoOrcamento $estadoAtual;

    public function  __construct(){
        $this ->estadotual = new EmAprovacao();
    }
    public function aplicaDescontoExtra(){
        $this->valor -= $this-> estadoAtual ->calculaDescontoExtra($this);
    }

    public function  aprova(){
        $this->estadoAtual->aprova($this);
    }
    public function  reprova(){
        $this->estadoAtual->reprova($this);
    }
    public function  finaliza(){
        $this->estadoAtual->finaliza($this);
    }
//    public  function calculaDescontoExtra(): float{
//        if($this->estadoAtual =='EM_APROVACAO'){
//            return $this->valor * 0.05;
//        }
//        if ( $this ->estadoAtual == 'APROVADO'){
//            return $this -> valor *0.02;
//        }
//        throw new \DomainException('Orçamentos reprovados ou finalizados não podem receber descontos');
//    }
}