<?php
print "\n Querido usuário,informe quantos km foram percorridos por seu carro alugado:";
$km_percorridos=fgets(STDIN);

print "\n Por quantos dias foi alugado?:";
$dias=fgets(STDIN);

$valor_da_diaria=60*$dias;
$valor_de_km=0.15*$km_percorridos;

$total_a_pagar=$valor_da_diaria+$valor_de_km;

print"O preço final a pagar de sua locação foi de $total_a_pagar reais \n";