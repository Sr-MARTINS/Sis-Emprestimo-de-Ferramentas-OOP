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
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <nav class="navbar ">
                    <div class="container-fluid">
                        <a href="logout.php" class="navbar-brand" style="font-size:2.1rem; margin-left:32px">
                            <i class="bi bi-box-arrow-in-left"></i>
                         </a>
                    </div>
                </nav>
                <div style=" margin-right: 2rem;">
                    <a href="" style="font-size:1.6rem; margin-left:32px">
                        <i class="bi bi-gear"></i>
                    </a>
                </div>
            </div>
            
        </div>

        <div class="col-md-10" style="margin:auto; text-align:center">
            <h1>Bem vindo Nome </h1>  
        </div>

        <div class="col-md-10" style="margin:2rem auto; text-align:center">
            <h3>Lista de Usuário</h3>  
            <!-- <h3>Lista de Ferramenta</h3>   -->
        </div>

        <div class="col-md-10" style="margin:2rem 0 2rem 7rem; display:flex; justify-content:space-between; align-items:center">
            
            <div>
                <a href="index.php" class="btn btn-outline-secondary" >Voltar</a>

                    <!-- CADASTRO DE FERRAMENTA -->
                <a href="/cadastro_usuario" class="btn btn-success">Criar Usuário</a>
                <!-- <a href="frmFerramenta.php" class="btn btn-success">Cadastrar Ferramenta</a> -->
            </div>

            <form method="POST" class="d-flex" role="search">
                <input type="search" name="busca" <?php echo @$_POST["busca"] ?> class="form-control me-2"  placeholder="Buscar Ferramenta" >
                <button type="submit" name="btPesq" class="btn btn-outline-success" >
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>

                <!--   TABELA CLIENTES  -->

        <div class="col-md-10" style="margin:2rem auto; border:1px solid #80808047; padding:20px 10px 20px 50px; height:445px">
         <table class="table col-md-8">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php foreach($user as $itens) : ?>
                    <tr>
                        <td><?= $itens->id_usuario ?></td>
                        <td><?= $itens->usuario ?></td>
                        <td><?= $itens->email ?></td>
                        <td>
                            <a href="/cadastro_usuario?id=<?= $itens->id_usuario ?>">Editar</a> /
                            <a href="/cadastro_usuario/delete?id=<?= $itens->id_usuario ?>">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach ?>

                </tbody>
            </table>
        </div>


    </div>
    
</body>
</html>