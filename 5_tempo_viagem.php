<?php

print "\n Para calcular o tempo de sua viagem primeiramente qual será a distância percorrida em km?:";
$distancia=fgets(STDIN);

print "\n  Ok!Agora que temos a distância qual será a velociadade média esperada em km/hr?:";
$velocidade=fgets(STDIN);

$tempo_em_horas=$distancia/$velocidade;
$tempo_em_minutos=$tempo_em_horas*60;

print "sua viagem terá a duração de aproximadamente $tempo_em_horas horas,ou seja $tempo_em_minutos minutos";