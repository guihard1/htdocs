<?php

/*
 * Superglobais no PHP
 * São variaveis que estão definidas pra gente no escopo global.
 * $_GET
 * É usado pra puxar diretamente da URL do site através do carrystring
 * no exemplo usado, através da URL eu coloquei meu nome após o ?pessoa=Luiz
 * dessa forma aqui no código usando o $_GET eu consigo pegar o valor de pessoa
 * e atribuir a uma variavel.
 *
 * Da pra adicionar mais de uma variavel atráves da URL, por exemplo:
 * ?pessoa=Luiz&idade=34
 * utilizando o & você consegue passar número, texto, etc.
 * */

//$nome = $_GET['pessoa'];
//$idade = $_GET['idade'];
//$cidade = $_GET['cidade'];
//
//echo "Olá, $nome, você tem $idade anos, e mora em $cidade";

// www.empresa.com.br/ex1/?pessoa=Luiz&idade=34&cidade=Minas+Gerais

// Clique aqui > www.empresa.com.br?campanha=1
// Clique aqui > www.empresa.com.br?campanha=2

$numero_campanha = $_GET['campanha'];
echo 'Você veio pela campanha: '.$numero_campanha;

//Uma forma de validação pra verificar se a variavel existe ou ja foi setada/recebeu algum valor é:
//utilizando isset
//No lugar de onde fica o isset também pode ser usado o empty pra retornar um valor true ou false.
//No caso abaixo eu não quero que ele entre então preciso trocar o isset por um empty, mas com ! no inicio
//if(!empty($_GET['campanha'])) {}
//A gente só trata os dados depois de garantir que a variavel existe e não está vazia.

if (!empty($_GET['campanha'])) {
    $numero_campanha = $_GET['campanha'];
    echo 'Você veio pela campanha: '.$numero_campanha;
} else {
    echo 'Variavel não definida';
}


//isset() - verificar se uma variavel foi setada, mas ignora totalmente se tem ou não valor.
//empty() - verificar se uma variavel foi setada e se TEM valor.