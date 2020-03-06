<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Aula 02</title>
</head>
<body>
    <h1>Loops e Funções</h1>

    <p>For utilizando incremento</p>

    <p>Loops - FOR ++</p>
    <?php
        for ($i=1; $i < 11; $i++) { 
            echo $i . "<br>";
        }
    ?>


        <hr>
    <p>For utilizando decremento</p>

    <p>Loops - FOR --</p>
    <?php
        for ($i=10; $i > 0; $i--) { 
            echo $i . "<br>";
        }
    ?>

    <hr>

    <p>While  utilizando incremento</p>
    <?php
        $i = 1;
        while($i <= 10) {
            echo $i . "<br>";
            $i++;
        }
    ?>


    <hr>

<p>While  utilizando decremento</p>
<?php
    $i = 10;
    while($i >= 1) {
        echo $i . "<br>";
        $i--;
    }
?>


<hr>

<p>Do While utilizando incremento</p>
<?php
$i=1;
do {
    echo $i."<br>";
    $i++;
} while ($i <= 10);
?>

<hr>

<p>Do While utilizando decremento</p>
<?php
$i=10;
do {
    echo $i."<br>";
    $i--;
} while ($i >= 1);
?>

<p>Exemplos percorrendo array com loops</p>

<p>For percorrendo Array</p>
<?php
    $animais = ["Gato", "Cachorro", "Girafa", "Elefante", "Leão"];

    for ($i=0; $i < count($animais) ; $i++) { 
        echo $animais[$i] . "<br>";
    }
?>
<hr>

<p>While percorrendo Array</p>
<?php
    $animais = ["Gato", "Cachorro", "Girafa", "Elefante", "Leão"];
    $i = 0;
    while ($i < count($animais)) {
        echo $animais[$i] . "<br>";
        $i++;
    }
?>


<hr>
<p>Do While percorrendo Array</p>
<?php
    $animais = ["pato", "peixe", "passaro", "Elefante", "Leão"];
    $i = 0;
    do {
        echo $animais[$i] . "<br>";
        $i++;
    } while ($i < count($animais));
?>

<hr>

<p>Foreach percorrendo array</p>
<?php
    // $animais = ["pato", "peixe", "passaro", "Elefante", "Leão"];
    foreach ($animais as $animal) {
        echo $animal . "<br>";
    }
?>

<hr>

<p>Foreach percorrendo array associativo</p>
<?php
    $user = [
        "nome" => "Marcelão",
        "email" => "mdeament@digitalhouse.com",
        "telefone" => "(11) 99999-9999"];

    foreach ($user as $key => $value) {
        echo "$key => $value" . "<br>";
    }

?>

<p>Funções</p>
<p>Função que retorna tabuada de um número</p>
<?php
    function tabuada($numero){
        $resultado = 0;
        $arrayResultados =[];
        for ($i=1; $i < 10; $i++) { 
            $resultado = $numero * $i;
            array_push($arrayResultados, $resultado);
        }
        return $arrayResultados;
    }
    $result= tabuada(10);
    
?>


</body>
</html>