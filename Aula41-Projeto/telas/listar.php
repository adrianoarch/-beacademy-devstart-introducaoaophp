<div class="container">
<h1>Listar Contatos</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($contatos as $contato)
        {
            $partes = explode(',', $contato);
            $nome = $partes[0];
            $email = $partes[1];
            $telefone = $partes[2];
            echo "<tr>";
            echo "<td>$nome</td>";
            echo "<td>$email</td>";
            echo "<td>$telefone</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
</div>