<h1>Calculadora Simples</h1>

<form action="" method="post" id="calculadoraform">
    <input type="number" name="numero1" placeholder="Número 1"> <br>

    
    <label for="operacao">Escolha a operação matemática</label>
    <select name="operacao" id="operacao" form="calculadoraform">
        <option value=+>Adição</option>
        <option value=->Subtração</option>
        <option value=*>Multiplicação</option>
        <option value=/>Divisão</option>
    </select>
    <br>

    <input type="number" name="numero2" placeholder="Número 2"> <br>

    <button>Calcular</button>

</form>


<?php

    if($_POST){

        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];

        switch($operacao){
            case '+':
                $resultado = $numero1 + $numero2;
                echo "O resultado da adição é: $resultado";
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                echo "O resultado da subtração é: $resultado";
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                echo "O resultado da multiplicação é: $resultado";
                break;
            case '/':
                $resultado = $numero1 / $numero2;
                echo "O resultado da divisão é: $resultado";
                break;
        }
    }
?>