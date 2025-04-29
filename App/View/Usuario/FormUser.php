<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Cadastro de Usuarios</h1>
    
    <form action="/home/cadastro/save_usuario" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for="email">Email:</label>
        <input type="email" name="email">
        
        <label for="password">Password:</label>
        <input type="senha" name="senha">

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>