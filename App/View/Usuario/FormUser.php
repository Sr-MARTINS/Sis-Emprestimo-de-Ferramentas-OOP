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

    <div class="container">
        <h3 style="text-align:center">Cadastro de Usuarios</h3>

        <div style="margin: 2rem auto;" >
            <div style="margin: 2rem 0 2rem 2rem; ">
                <a href="/home/list_usuario" class="btn btn-outline-secondary" >Voltar</a>
            </div>
            
            <div class="col-md-10" style="margin:auto">
                <form action="/home/cadastro/save_usuario" method="POST">

                    <input type="hidden" name="id_usuario" value="<?php echo isset($_GET['id']) ? $dadosLinha->id_usuario : ''; ?>"> 
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" class="form-control"
                        value="<?php echo isset($_GET['id']) ? $dadosLinha->usuario : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control"
                        value="<?php echo isset($_GET['id']) ? $dadosLinha->email : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Password</label>
                        <input type="senha" name="senha" class="form-control" >
                    </div>
        
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>