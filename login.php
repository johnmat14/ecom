<?php
  require_once "model.php";
  require_once "config.php";

  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $usuario = Usuario::obtemUsuarioPorEmail($dblink,$email);
    if($usuario !== null && $usuario->checarSenha($password) == true){
        $_SESSION["logado"] = true;
        header("location: index.php");
    } else {
        echo("Usuario ou senha incorretos");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" href="imgs/Carrinho.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Entrar</h5>
                        <form action="#" method="POST">
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email"
                                    required autofocus>
                                <label for="inputEmail">Email</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Senha"
                                    required>
                                <label for="inputPassword">Senha</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Lembrar senha</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="logar">Entrar</button>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>