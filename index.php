<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

require 'conexao.php';

try {
    $sql = "SELECT COUNT(*) as total_presos FROM presos";
    $resultado = $conn->query($sql);
    $row = $resultado->fetch(PDO::FETCH_ASSOC);
    $total_presos = $row['total_presos'];
} catch (PDOException $e) {
    echo "Erro na consulta de presos: " . $e->getMessage();
    $total_presos = 0; 
}

try {
    $sql = "SELECT COUNT(*) as total_detentos FROM detentos";
    $resultado = $conn->query($sql);
    $row = $resultado->fetch(PDO::FETCH_ASSOC);
    $total_detentos = $row['total_detentos'];
} catch (PDOException $e) {
    echo "Erro na consulta de detentos: " . $e->getMessage();
    $total_detentos = 0; 
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="CSS/sidebar.css">
    <style>
        .card {
            height: 100%;
            transition: all 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.2rem;
        }

        .card-text {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <?php require 'template/side_bar1.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quantidade de Presos Atuais: <?php echo $total_presos; ?></h5>
                        <p class="card-text">Clique no botão abaixo para ver cada preso.</p>
                        <a href="presos.php" class="btn btn-primary">Ver Presos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quantidade de Detentos Atuais: <?php echo $total_detentos; ?></h5>
                        <p class="card-text">Clique no botão abaixo para ver cada detento.</p>
                        <a href="detidos/detidos.php" class="btn btn-primary">Ver Detentos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="JS/jquery-3.7.1.js"></script>
    <script src="script.js"></script>
</body>

</html>
