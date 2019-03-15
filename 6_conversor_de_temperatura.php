<?php 
print "\nOla! Digite qual será a temperatura em Celsius que será convertida para Fahrenheit:";
$temperatura_em_celsius=fgets(STDIN);

$temperatura_em_fahren=((9*$temperatura_em_celsius)/5)+32;

print"\n A conversão ficou em $temperatura_em_fahren graus Fahrenheit";
