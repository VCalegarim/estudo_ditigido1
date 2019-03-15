<?php 
print "\nQual o valor do salario atual?:";
$salario=fgets(STDIN);

print "\nQuanto será a porcentagem de aumento?:";
$porcentagem=fgets(STDIN);

$aumento=($porcentagem/100)*$salario;

$novo_salario=$aumento+$salario;

print "\n O salario com $porcentagem porcento de aumento é de $novo_salario reais\n";



