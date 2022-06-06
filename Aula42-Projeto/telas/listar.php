<div class="container">
<h1>Listar Contatos</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th class="">Nome</th>
            <th class="">Email</th>
            <th class="">Telefone</th>
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($contatos as $id => $contato)
        {
            $partes = explode(',', $contato);
            $nome = $partes[0];
            $email = $partes[1];
            $telefone = $partes[2];
            $acoes = "<a href='/editar?id=$id' class='btn btn-sm btn-warning'>Editar</a>
                    <a href='/excluir?id=$id' class='btn btn-sm btn-danger'>Excluir</a>";
            echo "<tr>";
            echo "<td>$nome</td>";
            echo "<td>$email</td>";
            echo "<td>$telefone</td>";
            echo "<td class='text-center'>$acoes</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
</div>