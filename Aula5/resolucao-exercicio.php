<h1>Calculadora Simples</h1>

<form action="" method="post" id="calculadoraform">
    <input type="number" name="numero1" placeholder="Número 1"> <br>

    <input type="number" name="numero2" placeholder="Número 2"> <br>

    <button name="soma">Somar</button>
    <button name="subtracao">Subtração</button>
    <button name="multiplica">Multiplicação</button>
    <button name="divisao">Divisão</button>
    <br>

</form>


<?php

    if($_POST){

        if (isset($_POST['soma'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $resultado = $numero1 + $numero2;
            echo "O resultado da soma é: $resultado";
        }
        if (isset($_POST['subtracao'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $resultado = $numero1 - $numero2;
            echo "O resultado da subtração é: $resultado";
        }
        if (isset($_POST['multiplica'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $resultado = $numero1 * $numero2;
            echo "O resultado da multiplicação é: $resultado";
        }
        if (isset($_POST['divisao'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $resultado = $numero1 / $numero2;
            echo "O resultado da divisão é: $resultado";
        }
        // echo $_POST['numero1'] + $_POST['numero2'];
        
        // var_dump($_POST);
        
    }
?>