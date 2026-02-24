<?php
    
    $a = 10;
    $b = 5;

    $soma = $a + $b;

    echo "A soma é: $soma";

    echo "<hr>";
   

   //ESTRUTURAS CODICIONAIS
   //exemplos IF 

    if ($b > $a) {
    echo "B É MAIOR QUE A.";
   }else {
    echo " B NÃO É MAIOR QUE A.";
    }

    echo "<hr>";

    $n1 = 9;
    $n2 = 6;
    $n3 = 10;

    $media = ( $n1 + $n2 + $n3 ) /3; 

    echo "sua media é = $media";
     
    if ($media > 5) {
        echo "aprovado.";
    } else {
        if ($media < 4) {
            echo "reprovado.";
        } else {
            echo "recuperação.";
        }
    }

    echo "<hr>";
  
    $dia = 10;

    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        case 3:
            echo "Terça-feira";
            break;
        case 4:
            echo "Quarta-feira";
            break;
        case 5:
            echo "Quinta-feira";
            break;
        case 6:
            echo "Sexta-feira";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Dia inválido";
    }
     
    echo "<hr>";

    for ($i = 1; $i <= 10; $i++) { 
        echo "$i -";
    }
     
    echo "<hr>";


    $a = 1;

    while ($a <= 10) {
        echo "$a -";
        $a++;
    }
    
    echo "<hr>";


    $x = 1;
    do {
        echo "$x -";
        $x++;
    } while ($x <= 10);
    
    echo "<hr>";

    $nomes = ['fulano','arthur','brayan'];
   //echo $nomes; 

    $qntd = count($nomes);

    echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2];
    echo "<br>";

    //for ($n=0; $n < 2; $n++) { 
    //    echo $nomes[$n] . "<br>";
    //}


    foreach ($nomes as $nome) {
        echo"$nome <br>";
    }
?>
