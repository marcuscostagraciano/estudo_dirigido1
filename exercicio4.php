<?php
print "Preço incial da marcedoria: ";
$precoinicial = (float) fgets(STDIN);
print "Porcentagem de desconto: ";
$porcentagemdesconto = (float) fgets(STDIN);

$desconto= $porcentagemdesconto/100;
$descontoreal= $desconto*$precoinicial;
$precofinal= $precoinicial-$descontoreal;

print "\nO desconto foi de: $descontoreal reais\nO preço final é de: $precofinal reais";
