<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin-bottom: 60px;
            height: 88vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .form-label {
            margin-bottom: 5px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-custom,
        .btn-back {
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            margin-top: 10px;
            display: inline-block;
        }

        .btn-custom {
            background-color: #4caf50;
        }

        .btn-custom:hover {
            background-color: #45a049;
        }

        .btn-back {
            background-color: #dc3545;
            margin-left: 10px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <?php
    require 'template/side_bar2.php';
    require 'conexao.php'; 
    ?>

    <div class="form-container mx-auto">
        <form action="verify/cadastra.Presos.php" data-parsley-validate method="post" class="row g-2 mt-5">
            <h2>Formulário de Cadastro</h2>
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" id="idade" name="idade" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="sexo" class="form-label">Sexo:</label>
                <select id="sexo" name="sexo" class="form-select" required>
                    <option value="">Selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="altura" class="form-label">Altura (em cm):</label>
                <input type="number" id="altura" name="altura" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="peso" class="form-label">Peso (em kg):</label>
                <input type="number" id="peso" name="peso" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="data_prisao" class="form-label">Data da Prisão:</label>
                <input type="date" id="data_prisao" name="data_prisao" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="data_liberacao" class="form-label">Data de Liberação:</label>
                <input type="date" id="data_liberacao" name="data_liberacao" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="crime" class="form-label">Crime:</label>
                <input type="text" id="crime" name="crime" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="cela_id" class="form-label">Id Cela:</label>
                <select name="cela_id" id="cela_id" class="form-select" required>
                    <option value="">Selecione</option>
                    <?php
                    $sql = "SELECT * FROM cela";
                    $resultado = $conn->prepare($sql);
                    $resultado->execute();
                    $celas = $resultado->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($celas as $cela) {
                        echo '<option value="' . $cela['id'] . '">' . $cela['bloco'] .' | '. $cela['numero']. '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button name="submit" type="submit" class="btn-custom">Enviar</button>
                <a href="presos.php" class="btn-back">Voltar</a>
            </div>
        </form>
    </div>

    <script src="vendor/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="vendor/node_modules/parsleyjs/dist/parsley.min.js"></script>
    <link rel="stylesheet" href="vendor/node_modules/parsleyjs/src/parsley.css">
    <script src="vendor/node_modules/parsleyjs/dist/i18n/pt-br.js"></script>


</body>

</html>