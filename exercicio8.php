?php

    print "Digite o preço do produto 1 - R$";
    $produto1 = fgets (STDIN);

    print "Digite o preço do produto 2 - R$";
    $produto2 = fgets (STDIN);

    print "Digite o preço do produto 3 - R$";
    $produto3 = fgets (STDIN);

    if (($produto1<$produto2) and ($produto1<$produto3)){
        print "O produto com menor preço é o Produto 1 | R$$produto1";
    }
    elseif (($produto2 < $produto1) and ($produto2<$produto3)){
        print "O produto com menor preço é o Produto 2 | R$$produto2";
    }
    else{
        print "O produto com menor preço é o Produto 3 | R$$produto3";
    }
