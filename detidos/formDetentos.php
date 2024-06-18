<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../css/sidebar.css">
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
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1400px;
            width: 90%;
            margin-bottom: 60px;
            height: 95vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .btn-custom {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        .btn-custom:hover {
            background-color: #45a049;
        }

        .btn-back {
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-back:hover {
            background-color: #c82333;
        }

        label {
            color: #333;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="time"],
        select {
            padding: 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        
    </style>
</head>

<body>
    <?php
    require '../template/side_bar3.php'
    ?>
    <div class="form-container mx-auto">
        <h2>Formulário de Cadastro</h2>
        <form action="cadastraDetentos.php" method="post" data-parsley-validate class="row g-3">
            <div class="col-md-4 form-group">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="col-md-2 form-group">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" id="idade" name="idade" class="form-control" required>
            </div>
            <div class="col-md-3 form-group">
                <label for="motivo" class="form-label">Motivo:</label>
                <input type="text" id="motivo" name="motivo" class="form-control" required>
            </div>
            <div class="col-md-3 form-group">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-control" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="horario" class="form-label">Horário Detido:</label>
                <input type="time" id="horario" name="horario" class="form-control" required>
            </div>
            <div class="col-md-3 form-group">
                <label for="sexo" class="form-label">Sexo:</label>
                <select id="sexo" name="sexo" class="form-select" required>
                    <option value="">Selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="altura" class="form-label">Altura (em cm):</label>
                <input type="number" id="altura" name="altura" class="form-control" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="nasceu" class="form-label">Onde nasceu:</label>
                <input type="text" id="nasceu" name="nasceu" class="form-control" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="preso_anteriormente" class="form-label">Já foi preso anteriormente?</label>
                <select id="preso_anteriormente" name="preso_anteriormente" class="form-select" required>
                    <option value="">Selecione</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>
            <div class="col-12 d-flex justify-content-center mt-4">
                <button name="submit" type="submit" class="btn-custom">Enviar</button>
                <a href="detidos.php" class="btn-back">Voltar</a>
            </div>
        </form>
    </div>
    <script src="../vendor/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../vendor/node_modules/parsleyjs/dist/parsley.min.js"></script>
    <link rel="stylesheet" href="../vendor/node_modules/parsleyjs/src/parsley.css">
    <script src="../vendor/node_modules/parsleyjs/dist/i18n/pt-br.js"></script>

</body>

</html>
