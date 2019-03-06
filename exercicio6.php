<?php
print "Temperatura em ºC: ";
$temperaturaC = (float) fgets(STDIN);

$temperaturaF= 9*$temperaturaC/5+32;

print "$temperaturaC ºC em Fahrenheit, são: $temperaturaF ºF";
