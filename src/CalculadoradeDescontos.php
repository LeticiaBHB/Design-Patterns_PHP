<?php

namespace Aula\DesignPattern;

use Aula\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Aula\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Aula\DesignPattern\Descontos\SemDesconto;

class CalculadoradeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDesconto = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );
        return $cadeiaDeDesconto ->calculaDesconto($orcamento);

    }
}
//        $desconto5Itens = new DescontoMaisDe5Itens();
//        $desconto = $desconto5Itens->calculaDesconto($orcamento);
//        if ($desconto === 0) {
//            $desconto500Reais = new DescontoMaisDe500Reais();
//            $desconto = $desconto500Reais -> calculaDesconto($orcamento);
//        }
//        return $desconto;
//    }
//}

        //    if ($orcamento ->quantidadeItens > 5){
//        return $orcamento -> valor * 0.1;
//    }
//    if ($orcamento -> valor > 500){
//        return $orcamento -> valor *0.5;
//    }
//    return 0;
//    }
