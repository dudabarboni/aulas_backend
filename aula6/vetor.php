<h2>Vetores</h2>
<p>
    São estruturas de armazenamento compostas 
    heterogêneas (1-dim), que podem ser indexadas 
    númericamente ou textualmente.
</p>

<?php
    //exemplo variável simples
    $nota = 6;
    $nota = 3;
    echo $nota . "<br>";

    //exemplo vetor indexado númericamente
    $notas = []; //outra forma $notas = array ();
    $notas[] = 6;
    $notas[] = 3;
    //var_dump($notas);
    //imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) / 2 ;

    //Vetores com índice textual
    $notas = []; //cria um vetor vazio
    $notas["debora"] = 7;
    $notas["murilo"] = 7.8;
    $notas["poliana"] = 9;
    echo "<p></p>";
    echo "A poliana tirou nota" . $notas["poliana"]; 

    echo "<br>";
    $valores = [];
    $valores[] = 2;
    $valores[] = 4;
    $valores[] = 8;
    $valores[] = 10;
    $valores[] = 12;
    $valores[] = 14;
    $valores[] = 16;
    
    //ou - $valores = [2, 4, 8, 10, 12, 14, 16];

    //imprimindo o conteúdo de um vetor numérico.
    echo "<br>";
    for($i = 0; $i <= 6; $i++){
        echo $valores[$i] . "<br>";
    }

    //somar os valores de um vetor
    $numeros;
    for($i = 0; $i <= 6; $i++){
    $numeros = $numeros + $valores[$i] ;
    }    
 echo "<br> A soma dos valores é $acumulador";
?>