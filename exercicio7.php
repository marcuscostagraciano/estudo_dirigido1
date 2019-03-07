<?php
print "Quantidade de Km percorridos: ";
$kmpercorridos = (float) fgets(STDIN);

print "Quantidade de dias que o carro foi alugado: ";
$diascarroalugados = (float) fgets(STDIN);

$aluguelpordia= $diascarroalugados*60;
$aluguelporkm= $kmpercorridos*0.15;
$precototal= $aluguelpordia+$aluguelporkm;

print "\nO Preço total a pagar por km: $aluguelporkm reais\nO Preço total a pagar por dia: $aluguelpordia reais\nO Preço total a pagar: $precototal reais";
