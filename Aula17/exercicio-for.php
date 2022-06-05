<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select While</title>
</head> 
<body>
    <select name="ano" id="ano">
        <option selected>Selecione o ano</option>
        <?php

            for ($ano = 2022; $ano >= 1950; $ano--) {
                echo "<option value='{$ano}'>{$ano}</option>";
            }

            // $ano = 2022;

            // while ($ano >= 1950) {
            //     echo "<option value='{$ano}'>{$ano}</option>";
            //     $ano--;
            // }
        ?>
    </select>
    
    <select name="mes" id="mes">
        <option selected>Selecione o mês</option>
        <?php
            $meses = array(
                'Janeiro',
                'Fevereiro',
                'Março',
                'Abril',
                'Maio',
                'Junho',
                'Julho',
                'Agosto',
                'Setembro',
                'Outubro',
                'Novembro',
                'Dezembro'
            );
            for ($i = 0; $i < count($meses); $i++) {
                echo "<option value='{$i}'>{$meses[$i]}</option>";
            }
        ?>
    </select>

    <select name="dia" id="dia">
        <option selected>Selecione o dia</option>
        <?php
            for ($dia = 1; $dia <= 31; $dia++) {
                echo "<option value='{$dia}'>{$dia}</option>";
            }
        ?>
</body>
</html>