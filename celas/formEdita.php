<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <div class="form-container mx-auto">
        <h2 class="text-center">Atualizar ACela</h2>
        <form action="edita.php" method="post" data-parsley-validate class="row g-3">
            <input type="hidden" id="id" value="<?php echo $cela['id']; ?>" name="id">
            <div class="col-md-6">
                <label for="bloco" class="form-label">Bloco:</label>
                <input type="text" id="bloco" value="<?php echo $cela['bloco']; ?>" name="bloco" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="numero" class="form-label">Número:</label>
                <input type="number" id="numero" value="<?php echo $cela['numero']; ?>" name="numero" class="form-control" required>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button name="submit" type="submit" class="btn btn-success">Atualizar</button>
                <a href="index.php" class="btn btn-danger ms-2">Voltar</a>
            </div>
        </form>
    </div>
</div>
<script src="../vendor/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../vendor/node_modules/parsleyjs/dist/parsley.min.js"></script>
<link rel="stylesheet" href="../vendor/node_modules/parsleyjs/src/parsley.css">
<script src="../vendor/node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
</body>
</html>
