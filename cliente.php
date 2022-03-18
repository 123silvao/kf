<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/csscliente.css">
    <title>cliente</title>
</head>
<body>
    <div class="container">
    <div class="header">
    <h2>cadastro de cliente</h2>
    </div>

<form  method="POST" class="form" action="processa.php">
    <div class="form-control">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id = "nome" class = "inputUser" required><br><br>
    <label for="text">email</label>
    <input type="text" name="email"id = "email" class = "inputUser" required><br><br>
    <label for="cidade">Cidade</label>
    <input type="text" name="cidade" id = "cidade" class = "inputUser" required><br><br> 
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id = "telefone" class = "inputUser" required><br><br>
    <label for="data">Data</label>
    <input type="date" name="data" id = "data" class = "inputUser" required><br><br>

    <input type="submit" value ="Cadastrar">
</form>
</div>
    
</body>
</html>