<?php
$patinhos =  readline('Digite a quantidade de patinhos: ');
if (!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10) {
    echo 'O numero de patinhos digitados é valido';
    echo 'É necessario enviar um valor maior que 1 e menor que 10';
    exit;
}