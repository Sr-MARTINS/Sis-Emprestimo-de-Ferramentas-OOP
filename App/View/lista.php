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
    
    <?php
        // var_dump($user);
    ?>

    <div class="container-fluid">
        <div>
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <nav class="navbar ">
                    <div class="container-fluid">
                        <a href="logout.php" class="navbar-brand" style="font-size:2.1rem; margin-left:32px">
                            <i class="bi bi-box-arrow-in-left"></i>
                            </a>
                    </div>
                </nav>
                <div style=" margin-right: 2rem;">
                    <a href="/cadastro_usuario" style="font-size:1.6rem; margin-left:32px">
                        <i class="bi bi-gear"></i>
                    </a>
                </div>
            </div>
                
            <div class="col-md-10" style="margin:auto; text-align:center">
                <h1>Bem vindo Nome </h1>  
            </div>

            <div class="col-md-10" style="margin:2rem auto; text-align:center">
                <h3>Lista de Ferramenta</h3>  
            </div>

            <div class="col-md-10" style="margin:2rem 0 2rem 7rem; display:flex; justify-content:space-between; align-items:center">
                
                <div>
                    <a href="/cadastro_ferramente" class="btn btn-success">Cadastrar Ferramenta</a>
                </div>

                <form method="POST" class="d-flex" role="search">
                    <input type="search" name="busca" <?php echo @$_POST["busca"] ?> class="form-control me-2"  placeholder="Buscar Ferramenta" >
                    <button type="submit" name="btPesq" class="btn btn-outline-success" >
                        <i class="bi bi-search"></i>
                    </button>
                </form>
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