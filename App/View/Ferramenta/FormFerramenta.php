<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Cadastro</h1>

    <form method="POST" action="/home/Cadastro/formFerramenta/save">
        <label for="ferramenta">Ferramenta</label>
        <input type="text" name="ferramenta" id="nome">

        <label for="descricao">Descricao</label>
        <input type="text" name="descricao" id="descricao">
        
        <label for="">Status</label>
        <select name="status">
            <option value=""></option>
            <option value="disponivel" name="disponivel">Dispivel</option>
            <option value="emprestada" name="emprestada">Emprestada</option>
        </select>

        <button type="submit">
            Cadastrar
        </button>
    </form>
    
</body>
</html>