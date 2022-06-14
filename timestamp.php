<?php 

/**
 * Recupera o timestamo unix
 */
// print_r("Timestamp Unix: " . time());


// echo PHP_EOL;

/**
 * Formatar Timestamp Unix
 */
// print_r("Timestamp Unix Formatado: " . date("d/m/Y H:i:s", time()) );


/**
 * Intervalo de Timestamp
 * Padrão americano
 */
$antes = date("Y-m-d H:i:s", strtotime(date("2022-06-01")));
$agora = date("Y-m-d H:i:s");

$periodo1 = new DateTime($antes);
$periodo2 = new DateTime($agora);

$intervalo = $periodo2->diff($periodo1);
print_r($intervalo);