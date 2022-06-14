<?php 

/**
 * Agora
 */
$agora = new DateTime();
// print_r($agora);

/**
 * Formato
 */
$agora->format("d/m/Y H:i:s");

/**
 * Ontem
 */
$ontem = new DateTime("yesterday");
// print_r($ontem);

/**
 * Intervalo
 */
$entrada = new DateTime("09:00");
$saida = new DateTime("18:00");

$intervalo = $saida->diff($entrada);
print_r("Diferença de :" . $intervalo->h . " horas");

/**
 * Fuso Horário
 */
$timezone = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime("now", $timezone);
print_r($agora);