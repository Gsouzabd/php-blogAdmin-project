<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main_styles.css">
  <script src="index.js" defer></script>


  <link rel="preconncet" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f2ea1c16e3.js" crossorigin="anonymous"></script>
  <title>Login</title>
</head>
<body>

<main>
  <form action="/realizar-login" method="post">

      <?php if(isset($_SESSION['mensagem'])):?>
          <div class="alert alert-<?= $_SESSION['tipo_mensagem'];?>">
              <?= $_SESSION['mensagem'];?>
          </div>
      <?php endif;?>

      <?php
      unset ($_SESSION['tipo_mensagem']);
      unset ($_SESSION['mensagem']);?>

    <h1>Login</h1>
    <section class="inputs-container">
      <input type="email" id="email" name="email" required="required" placeholder="example@gmail.com" >

      <div class="password-container">
        <input type="password" name="senha" id="field-password" class="field-password" placeholder="Digite sua senha">
        <i class="fa-solid fa-eye" id="eye" onclick="showPassword()"></i>
        <i class="fa-solid fa-eye-slash" id="eye-slash" onclick="showPassword()"></i>
      </div>
    </section>

    <section class="password-infos">
      <div>
        <input type="checkbox">
        <span class="remembergi">Lembrar senha?</span>
      </div>

      <a href="#">Esqueceu sua senha?</a>
    </section>

    <button id="btn-login">Login</button>

    <footer>
      <span>Ainda não tem uma conta? <a href="cadastro.html">Cadastre-se</a> </span>
    </footer>
  </form>
</main>
</body>
</html>