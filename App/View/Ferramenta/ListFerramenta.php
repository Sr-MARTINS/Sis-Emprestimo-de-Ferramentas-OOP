<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

    <div class="container-fuid">
        <div>
            <div>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand">Ferramenta</a>
                        <form class="d-flex" role="search">
                            <input type="search" name="busca" class="form-control me-2"  placeholder="Buscar Ferramenta" >
                            <button class="btn btn-outline-success" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
            
        </div>

        <div class="col-md-10" style="margin:2rem auto; text-align:center">
            <h3>Lista de Ferramenta</h3>  
        </div>

        <a href="/list_usuario">Cadastro Usuarios</a>


        <div class="col-md-10" style="margin:2rem 0 2rem 7rem">
            <!-- <a href="index.php" class="btn btn-outline-secondary" >Voltar</a> -->
            <a href="/cadastro_ferramente" class="btn btn-success">Cadastrar Ferramenta</a>
            
        </div>

        <div class="col-md-10" style="margin:2rem auto; border:1px solid #80808047; padding:20px 10px 20px 50px">
            <table class="table col-md-8">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Status</th>
                        <th scope="col" style="padding-left:20px">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($rows as $itens) : ?>
                        <tr>
                            <td><?= $itens->id_ferramenta ?></td>
                            <td><?= $itens->ferramenta    ?></td>
                            <td><?= $itens->descricao     ?></td>
                            <td><?= $itens->status        ?></td>

                            <td>
                                <a href="/cadastro_ferramente?id=<?= $itens->id_ferramenta ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a> 
                                <a href="/cadastro_ferramenta/delete?id=<?= $itens->id_ferramenta ?>">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>

    </div>

</body>
</html>