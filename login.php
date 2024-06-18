
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title> 
  <script defer src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script defer src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="CSS/style.css" />
</head>

<body>
  <div class="wrapper">
    <div class="container main">
      <div class="row">
        <div class="col-md-6 side-image">
          <!-------------      image     ------------->
          <div class="text">
          </div>

        </div>

        <div class="col-md-6 right">

          <div class="input-box">

            <header>DELEGACIA</header>
            <form action="verify/logar.php" method="post" data-parsley-validate>

              <?php
              if (isset($_GET['success']) && $_GET["success"] == 'deu certo') {
              ?>
                <p class="text-success text-center">Delegacia cadastrada</p>
              <?php
              }
              ?>
              <?php
              if (isset($_GET["erro"]) && $_GET["erro"] == 'ok') {
              ?>
                <p class="text-danger text-center">login ou senha incorreto(a)</p>
              <?php
              }
              ?>
              <div class="input-field">
                <input name="loginUser" type="text" class="input" id="email" required="" autocomplete="off">
                <label for="typer">Nome</label>
              </div>
              <div class="input-field">
                <input name="senhaUser" type="password" class="input" id="pass" required="">
                <label for="pass">Senha</label>
              </div>
              <div class="input-field">

                <input style="margin-top: 20px;" name="submit1" type="submit" class="submit" value="Entrar">
              </div>
              <div class="signin">
                <span>não possui uma conta? <a href="formCadastro.php">Cadastrar</a></span>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  <script src="vendor/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="vendor/node_modules/parsleyjs/dist/parsley.min.js"></script>
  <link rel="stylesheet" href="vendor/node_modules/parsleyjs/src/parsley.css">
  <script src="vendor/node_modules/parsleyjs/dist/i18n/pt-br.js"></script>


</body>

</html>