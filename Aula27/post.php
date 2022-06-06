<form action="" method="post">
    <input type="text" name="nome" placeholder="Digite aqui">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_POST){
    echo $_POST['nome'];
}