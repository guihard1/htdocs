<?php

function processarPagamento(MetodoPagamento $formaDePagamento, $valorPagamento) {

    echo 'Processando pagamento via '. $formaDePagamento->getName(). ' no valor de R$'. $valorPagamento. '...<br>';

    if($formaDePagamento->pagar($valorPagamento)) {
        echo '<br>Pagamento realizado com sucesso!';
    } else {
        echo '<br>Pagamento não realizado';
    }
}