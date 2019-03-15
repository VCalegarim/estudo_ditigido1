<?php
//letra A

print "\n Digite o tamanho em metros quadrados da área desejada a ser pintada:";
$metros = (float) fgets(STDIN);

$folga = ($metros+($metros*10/100));

$litro= $folga/6;

$latas= ceil($litro/18);

$preco_l= $latas*80.00;

print " \n Para pintar o quanto você deseja custará $preco_l reais \n  usando $latas lata(s) ";

//letra B

$litro= $folga/6;

$galao= ceil($litro/3.6);

$preco_g= $galao*25.00; 

print "\n E com galões custará $preco_g reais \n  usando $galao galão(ões) ";

//c
$latas2 = (int) ($litro/18);
$faltou = $litro%18;
$galoes = ceil ($faltou/3.6);
$total=($galoes*25)+($latas2*80);

print "\n Misturando latas e galões você vai precisar de $latas2 lata(s) e $galoes galõe(ões) custando $total reais ";











