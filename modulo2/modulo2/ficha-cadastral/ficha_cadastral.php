<?php

    require 'constants.php';
    require 'data.php';
/*
     Criando uma constante no PHP
    Através do define() você consegue definir uma constante, porém é mais semântico usar const mesmo.


     if()... else ...
     (idade == 10) ?sim :não ou se não.

    Ternário:
    condicao ? valor_se_atender_condicao : valor_se_nao_atender_condicao;

    $situacaoEmprego = null;
    if ($esta_empregado) {
        $situacaoEmprego = 'Empregado';
    } else {
        $situacaoEmprego = 'Desempregado';
    }

    $anos_necessarios_para_aposentar = null;
    if ($sexo == 'M') {
        $anos_necessarios_para_aposentar = IDADE_APOSENTADORIA_FEMININA;
    } else {
        $anos_necessarios_para_aposentar = IDADE_APOSENTADORIA_MASCULINA;
    }
*/

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome ?></strong></p>
            <p>Idade: <strong><?= $idade ?></strong></p>
            <p>Sexo: <strong><?= $sexo ?></strong></p>
            <p>Salário Mensal: <strong>R$ <?= number_format($salarioMensal, 2, ',','.')?></strong></p>
            <p>Salário Anual: <strong>R$ <?= number_format($salarioAnual, 2, ',','.') ?></strong></p>
            <p>Status de Emprego: <strong><?= $situacaoEmprego ?></strong></p>
            <p>Anos para Aposentadoria: <strong><?= $anos_necessarios_para_aposentar - $idade ?></strong></p>
            <p>Habilidades:
                <strong>
                    <?=  //caso use o echo, não pode usar o shortcode <?= pois da erro, ou usa o echo ou usa o shortcode.
                    implode(', ', $habilidades); //implode serve para unir um array em uma string
                    ?>
                </strong></p>
        </div>
    </div>
</body>

</html>