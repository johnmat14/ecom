<?php
require_once 'config.php';
require_once 'model.php';

if (isset($_POST['email']) ){
    $id = null;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $usuario = new Usuario($id, $nome, $email, $password);
    $usuario->add($dblink);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registre-se em nosso site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Cadastro de usuário</h2>
    <form action="#" method="post">

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Digite o email do usuário" name="email">
        </div>

        <div class="form-group">
            <label for="usuario">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome completo para o usuário" name="nome">
        </div>
		
		  <div class="form-group">
            <label for="usuario">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite a senha do usuario" name="pass">
        </div>


        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>

</body>
</html>
