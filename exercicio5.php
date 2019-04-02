<?php

print "Digite a primeira nota: ";
$primeira_nota = fgets (STDIN);

print "Digite a segunda nota: ";
$segunda_nota = fgets (STDIN);

$media = ($primeira_nota+$segunda_nota)/2;

    print "N1 | $primeira_nota";
    print "N2 | $segunda_nota\n";
    print "Média | $media \n\n";

if ($media == 10){
    print "---Aprovado com Distinção--- \n\n";
}
elseif ($media >= 7){
    print "Aprovado\n\n";
}
else{
    print "Reprovado\n\n";
}




