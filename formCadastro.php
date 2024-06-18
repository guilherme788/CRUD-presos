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
  <link rel="stylesheet" href="CSS/style.css" />
  <script src="script.js"></script>
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
            <form id="form" action="verify/cadastra.php" method="post">
            <div class="input-field">
              <input name="loginUser" type="text" class="input" id="email" required="" autocomplete="off" oninput="nameValidate()">
              <label for="typer">Nome</label>
            </div>
            <div class="input-field">
              <input name="senhaUser" type="password" class="input" id="pass" required="">
              <label for="pass">Senha</label>
            </div>
            <div class="input-field">

              <input name="submit2" type="submit" class="submit" value="Cadastrar" href="login.php">
            </div>
            <div class="signin">
              <span>Ja possui uma conta? <a href="login.php">Entrar</a></span>
            </div>
          </div>
        </div>
            </form>   
      </div>
    </div>
  </div>
</body>

</html>