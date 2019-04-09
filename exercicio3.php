<?php

    print "Qual seu sexo? [F] ou [M]: ";
    $sexo = (string) fgets (STDIN);

    if ($sexo = 'F'){
        print "Feminino \n";
    }
    elseif ($sexo = 'M'){
        print "Masculino \n";
    } 
    else{
        print "Sexo Inválido\n";
    }
