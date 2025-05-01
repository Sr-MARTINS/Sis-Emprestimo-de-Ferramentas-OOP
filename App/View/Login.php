<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #topo {
            margin: .5rem 2rem 0 2rem;
        }
        main {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 80vh;
            margin: 1rem;
        }
        #boxImg {
            width: 50%;
        }
        #boxImg img {
            width: 100%;
        }
        #boxForm {
            width:380px;
            padding:10px;
            border:1px solid grey;
            border-radius:1rem;
            margin-bottom:1rem;
        }
        form {
            padding-left:2rem ;
        }
        form input[type="text"] {
            width: 300px;
            padding: 8px;
            margin: .4rem 0 1.1rem 0;
            border-radius:.5rem;
            border-color: #80808050;
        }
        
        form button {
            width: 50%;
            margin: auto;
        }
    </style>

</head>
<body>
    <header>
        <nav class="navbar bg-body" id="topo">
            <div class="container-fluid">
              <a class="navbar-brand">Projeto Landing Page</a>
              <div>
                    <a href="">Area Administrativa</a>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div id="boxImg">
            <img src="img/Design-sem-nome-9.jpg" alt="">
        </div>
        <div id="boxForm">
            <div class="text-center" style="margin-bottom: 1.2rem">
              <h2>Ciclo de estudo</h2>
              <p>Se ja faça paarte da nossa companhia, faça seu login. Caso contrario, cadastre-se para usar nosso serviço.</p>
            </div>
            <form class="d-flex flex-column" action="cadastro.php" method="POST">
                <label for="nome">Email:</label>
                <input type="text" name="email" placeholder="Email">
                
                <label for="email">Email:</label>
                <input type="text" name="senha" placeholder="Email">

                <button type="submit" class="btn active" role="button" data-bs-toggle="button" aria-pressed="true" > Click </button>
            </form>
                
                <!-- {Login}  - Aria admistrativa  -->
                 <a href="/cadastro_usuario">Cadastre-se</a>
        </div>
    </main>
    
</body>
</html>