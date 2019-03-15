<?php 
print "\nQuanto custa a mercadoria?:";
$mercadoria=fgets(STDIN);

print "\nQual será o percentual do desconto?:";
$percentual=fgets(STDIN);

$desconto=($percentual/100)*$mercadoria;
$valor_final=$mercadoria-$desconto;

print "\nA mercadoria com o valor inicial de $mercadoria reais com um desconto de $percentual porcento
tera uma diminuição de $desconto reais no seu valor,tendo um custo final de $valor_final reais ";



