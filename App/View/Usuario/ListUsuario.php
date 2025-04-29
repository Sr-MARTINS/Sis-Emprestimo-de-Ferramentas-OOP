<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista Usuario</h1>

    <!-- <a href="/home/cadastro_ferramente">Cadastrar Ferramenta</a> //  //   // -->

    <a href="/home/cadastro_usuario">Cadastro Usuarios</a>

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
                <th>ID</th>
                <th>Ferramenta</th>
                <th>Descrição </th>
                <th>Status    </th>
                <th>Opsções   </th>
           

            <td>
                <a href="">Editar</a> /
                <a href="">Deletar</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>