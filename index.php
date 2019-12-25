<?php

//Valor que vem do banco de dados
$number = '10400.15';

//Convertendo para exibir ao cliente
$real = number_format($number, 2, ',','.');
echo $real."<br>";

//Convertendo para salvar no banco novamente
$db = str_replace(',','.',str_replace('.','',$real));
echo $db;

?>