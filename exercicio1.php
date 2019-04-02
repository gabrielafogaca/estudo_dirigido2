<?php

print "Digite um número: ";
$numero1 = (int) fgets (STDIN);

print "Digite um número: ";
$numero2 = (int) fgets (STDIN);

if ($numero1 < $numero2){
    print "Maior número: $numero2 \n";
}
if ($numero1 > $numero2){
    print "Maior número: $numero1 \n";
}