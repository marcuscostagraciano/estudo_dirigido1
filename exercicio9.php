<?php

/*1 litro para cada 6m²;
  1 lata custa 80 reais com 18 litros;
  1 galão custa 25 reais com 3,6 litros;
  1 lata = 5 galões;*/

print "Tamanho em m² a ser pintado: ";
$tamanhom2pintar = (float) fgets(STDIN);

print "\nDeseja usar: 1 - Lata de 18 litros = custam 85 reais\n             2 - Galão de 3,6 litros = custam 25 reais\n             3 - Misturar galões e latas\n    Selecione 1,2 ou 3: ";
$lataougalao= (float) fgets(STDIN);

if ($lataougalao == 1) 
    {$quantidadelitros= $tamanhom2pintar/6;
     $quantidadelitros= ceil ($quantidadelitros);
     $quantidadelatas= $quantidadelitros/18;
     $quantidadelatas= ceil ($quantidadelatas);
     $precolatas= $quantidadelatas*85;
     print "\nO preço vai ser: $precolatas reais\nVocê vai comprar $quantidadelatas latas";}

if ($lataougalao == 2)
{   $quantidadelitros= $tamanhom2pintar/6;
    $quantidadelitros= ceil ($quantidadelitros);
    $quantidadegaloes= $quantidadelitros/3.6;
    $quantidadegaloes= ceil ($quantidadegaloes);
    $precogaloes= $quantidadegaloes*25;
    print "\nO preço vai ser: $precogaloes reais\nVocê vai comprar $quantidadegaloes galões";}

if ($lataougalao == 3)
{   $quantidadelitros= $tamanhom2pintar/6;
    $desperdicio= $quantidadelitros*(10/100);
    $quantidadelitros= $quantidadelitros+$desperdicio;
    $quantidadelitros= ceil ($quantidadelitros);
    $quantidadegaloes= $quantidadelitros/3.6;
    $quantidadegaloes= ceil ($quantidadegaloes);


    if ($quantidadegaloes%5==0 or $quantidadegaloes>=5)
    {$quantidadelatasda3= $quantidadegaloes/5;
        $quantidadelatasda3= ceil($quantidadelatasda3);
        $galoessemlatas= $quantidadelatasda3*5; 
        $quantidadegaloes= $quantidadegaloes-$galoessemlatas;
        $quantidadegaloes= ceil($quantidadegaloes);
    

        if ($quantidadegaloes<=0)
         {$quantidadegaloes=0;}         
    } 

    $precolatas= $quantidadelatasda3*85;
    $precogaloes= $quantidadegaloes*25;        
    $custo_total= $precogaloes+$precolatas;

    if ($quantidadelatasda3<=0) /*Só pra ficar melhorzinho(mais bonito)*/
          {$quantidadelatasda3=0;}

        /*A quantidade de latas/galões foram arredondadas para cima, pois você compra a lata/galão inteiro*/

   print "\nVocê vai comprar: \n$quantidadegaloes galão(ões), custando $precogaloes reais\n$quantidadelatasda3 Lata(s) custando $precolatas reais\nCustando no total: $custo_total reais";}
