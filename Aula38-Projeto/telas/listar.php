<div class="container">
<h1>Listar Contatos</h1>

<?php
    var_dump($contatos);
?>
<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($contatos as $contato): ?>
        <tr>
            <td><?= $contato ?></td>
           
            <!-- <td>
                <a href="?acao=editar&id=<?= $contato['id'] ?>" class="btn btn-warning">Editar</a>
                <a href="?acao=excluir&id=<?= $contato['id'] ?>" class="btn btn-danger">Excluir</a>
            </td> -->
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>