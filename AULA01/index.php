<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Aula 01</title>
</head>

<body>
    <?php
        $titulo = "Primeira Aula de PHP"
    ?>
    <h1>
        <?php echo $titulo; ?>
    </h1>
    <!-- Condicionais -->
    <!-- if - else -->
    <?php 
        $idade = 17;

        if($idade >= 18){
            echo "<h1>Pode Levar</h1>";
        }else{
            echo "<h1>Não vai levar</h1>";
        }
    ?>
    <hr>
    <!-- Exercicio de if - else -->
    <!-- condição 1 - não vota - até 16 -->
    <!-- condição 2 - obrigatório - 18 até 70 -->
    <!-- condição 3 - facultativo - entre 16 e 17 EEE maior que 61 -->
    <p>Exercicio de Condicionais</p>
    <p>1 - Verificar se uma pessoa pode votar ou não, ou se está pessoa possui voto facultativo</p>
    <?php
        $idade = 62;
        if($idade < 16){
            echo "<h1>Não pode votar</h1>";
        }
        if($idade > 18 && $idade <= 70){
            echo "<h1>Seu voto é obrigatório</h1>";
        }
        if($idade >= 16 && $idade <= 17 || $idade >= 71){
            echo "<h1>Seu voto é facultativo</h1>";
        }
    ?>

    <?php
        $genero = "abobara";
        switch ( $genero ) {
            case "Masculino":
                echo "É do gênero masculino";
                break;
            case "Feminino":
                echo "É do gênero feminino";
                break;
            default:
                echo "Prefere não dizer";
                break;
        }
        ?>
        <hr>
    <!-- switch -->
    <!-- Exercicio de switch -->
    <p>Exercicio de Condicionais - Switch</p>
    <p>
        1 - Veruficar se uma vairavel é 0 e retornar, você informou o valor 0.
        Ou, se a variavel é 1 e retronar, você informou o valor 1.
        Ou, se a variavel é qualquer ouotro número e retornar o valor informado.
    </p>
    <?php
        $valor = 10;
        switch ( $valor ) {
            case 0:
                echo "você informou o valor 0";
                break;
            case 1:
                echo "você informou o valor 1";
                break;
            default:
                echo "$valor";
                break;
        }
    ?>
    <hr>
    <p>Exercicio de Condicionais - Arrays</p>
    <p>
        1 - Veruficar se uma vairavel é 0 e retornar, você informou o valor 0.
        Ou, se a variavel é 1 e retronar, você informou o valor 1.
        Ou, se a variavel é qualquer ouotro número e retornar o valor informado.
    </p>
    <h1>Arrays</h1>
    <?php
        $arrayAnimais = [
            "Cachorro", 
            "Gato", 
            "Girafa", 
            "Elefante"
        ];
        // percorrendo arraAnimais
        var_dump($arrayAnimais);

        $estojo = array(
            "caneta azul", 
            "caneta verde",
            "caneta vermelha",
            "controle do projetor"
        );
        echo "<pre>";
        // percorrendo estojo
        var_dump($estojo);
        echo "</pre>";
    ?>
    <hr>
    <h1>Array Associativo</h1>

    <?php
        $usuario = [
            "email" => "edsonhorikoshi@hotmail.com",
            "senha" => "123546"
        ];
        echo "<pre>";
        var_dump($usuario);
        echo "</pre>";

    ?>

</body>
</html>