<!DOCTYPE html>
<html lang="pt-br">
<head>    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="../js/index.js" defer></script>

    <link rel="preconncet" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f2ea1c16e3.js" crossorigin="anonymous"></script>
    <title>Cadastre sua conta</title>
</head>
<body>
<div id="cadastro">
    <div class="teste">
        <h1>Redefinir Senha</h1>

        <?php if(isset($_SESSION['mensagem'])):?>
            <div class="alert alert-<?= $_SESSION['tipo_mensagem'];?>">
                <?= $_SESSION['mensagem'];?>
            </div>
        <?php endif;?>

        <?php
        unset ($_SESSION['tipo_mensagem']);
        unset ($_SESSION['mensagem']);
        ?>


        <form class="register" method="post" action="/redefinir-senha">


            <p class="email">
                <label for="email_cad">Digite seu e-mail</label>
                <input id="email_cad" name="email_cad" required="required" type="email" placeholder="example@gmail.com"/>
            </p>


            <button class="btn-register"> Solicitar nova senha</button>

            <p class="link">
                Já tem conta?
                <a href="/login"> Ir para Login </a>
            </p>
            <p class="link">
                Não possui conta?
                <a href="/cadastro"> Cadastre-se </a>
            </p>

        </form>
    </div>
</div>
</body>
</html>