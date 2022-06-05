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
            $ano = 2022;

            while ($ano >= 1950) {
                echo "<option value='{$ano}'>{$ano}</option>";
                $ano--;
            }
        ?>
    </select>
</body>
</html>