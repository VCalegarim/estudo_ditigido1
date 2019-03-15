<?php

print"Digite a quantidade em dias:";
$dias=(int) fgets(STDIN);

print"Digite a quantidade em horas:";
$horas= (int) fgets(STDIN);

print"Digite a quantidade em minutos:";
$minutos= (int) fgets(STDIN);

print"Digite a quantidade em segundos:";
$segundos= (int) fgets(STDIN);
 
$segundos_totais= (int) ($dias*86400)+($horas*3600)+($minutos*60)+$segundos;

print"Com os dados informados se tem o total de $segundos_totais segundos ";