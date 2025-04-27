<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista</h1>

    <a href="home/cadastro">Cadastrar Ferramenta</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ferramenta</th>
            <th>Descrição </th>
            <th>Status    </th>
            <th>Opsções   </th>
        </tr>

        <?php foreach($rows as $itens) : ?>
        <tr>
            <td><?= $itens->id_ferramenta ?></td>
            <td><?= $itens->ferramenta    ?></td>
            <td><?= $itens->descricao     ?></td>
            <td><?= $itens->status        ?></td>

            <td>
                <a href="">Editar</a> /
                <a href="/home/cadastro/delete?id=<?= $itens->id_ferramenta ?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>