<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        Você foi contratado para desenvolver um conversor de unidades, onde o usuario poderá inserir valores em milimetros, centimetros, metros ou kilometros e a aplicação deverá trazer a informação do valor correspondente nas demais unidades.
o programa deve seguir as restrições abaixo:
- O programa deve solicitar ao usuario que informe qual a unidade base do valor a ser inserido;
- O programa não deve permitir o avanço das etapas caso o usuario digite uma unidade inválida;
- O programa deve solicitar ao usuario o valor da unidade base;
- O programa não deve permitir o avanço das etapas caso o usuario digite um valor não numerico;
- O programa deverá imprimir os valores correspondendtes em todas as unidades disponiveis no sistema, exceto aquela que o usuario inseriu 
-->
<?php 
    //unidades válidas para o sistema
    $unidades = [
        'mm' => 1,
        'cm' => 10,
        'm' => 1000,
        'km'=> 1000000,
    ];
    //texto unidade validas
    $unidadesValidas = implode(', ',array_keys($unidades));
    do{
    //solicta a unidade base para o usuario
    $unidadeBase = readline('Digite a unidade base('.$unidadesValidas.') : ');
    //mensagem de erro
    if(!isset($unidades[$unidadeBase])){
        echo 'unidade inválida\n\n';
    }
    }while(!isset($unidades[$unidadeBase]));

    do{
        //solicta o valor da unidade para o usuario
        $valorBase = readline('Digite o valor base : ');
        //mensagem de erro
        if(!is_numeric($valorBase)){
            echo 'Valor  inválido\n\n';
        }
        }while(!is_numeric($valorBase));

    //valor em milimetros
    $valorMilimetro = $valorBase * $unidades[$unidadeBase];

    echo '\n Resultados: \n';

    //imprime as unidades do sistema
    foreach($unidades as $unidades => $divisor){
        //ignora a impressão da unidade base
        if($unidade == $unidadeBase) continue;
        //imprime o valor das unidades
        echo ' > ' . ($valorMilimetro/$divisor). ''.$unidade.'';
    }

?>
</body>
</html> 