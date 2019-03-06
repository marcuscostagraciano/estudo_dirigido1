<?php
print "Salário incial: ";
$salarionicial = (float) fgets(STDIN);
print "Porcentagem de aumento: ";
$porcentagemaumento = (float) fgets(STDIN);

$porcentagemreal= $porcentagemaumento/100;
$aumentosalario= $salarionicial*$porcentagemreal;
$salariofinal= $salarionicial+$aumentosalario;

print "\nO aumento foi de: $aumentosalario reais\nO salário final foi: $salariofinal reais";
