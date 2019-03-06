<?php
print "Quantidade de dias: ";
$diasquantidade = (int) fgets(STDIN);
print "Quantidade de horas: ";
$horasquantidade = (int) fgets(STDIN);
print "Quantidade de minutos: ";
$minutosquantidade = (int) fgets(STDIN);
print "Quantidade de segundos: ";
$segundosquantidade = (float) fgets(STDIN);
$diastosegundos = $diasquantidade*24*60*60;
$horastosegundos = $horasquantidade*60*60;
$minutostosegundos = $minutosquantidade*60;
  $segundostotais = $diastosegundos+$horastosegundos+$minutostosegundos+$segundosquantidade;
  
print " Segundos totais: $segundostotais";
