<?php

$arquivo = fopen('./produtos.csv', 'a+');

fwrite($arquivo, "Adriano".PHP_EOL);
fwrite($arquivo, "Ane".PHP_EOL);
fwrite($arquivo, "Bruna".PHP_EOL);
fwrite($arquivo, "Carlos".PHP_EOL);

fclose($arquivo);