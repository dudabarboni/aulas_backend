<h2>Exercicios 3</h2>



<?php

$Aluno1 = array(
    "nome" => "Poliana",
    "nota1" => "7",
    "nota2" => "9"
);
$Aluno2 = array(
    "nome" => "Murilo",
    "nota1" => "8",
    "nota2" => "5"
);
$Aluno3 = array(
    "nome" => "André",
    "nota1" => "6",
    "nota2" => "7"
);

$dados = [$Aluno1, $Aluno2, $Aluno3];

for($i=0; $i<=2; $i++){
    foreach($dados[$i] as $key =>$value){
        echo $value . " | " ;
    }
    echo "<br>";
}

?>