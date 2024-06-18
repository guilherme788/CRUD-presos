<?php
session_start();
require '../conexao.php';

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

$detentos = [];

try {
    $sql = "SELECT * FROM detentos";
    $resultado = $conn->query($sql);
    $detentos = $resultado->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro na consulta: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detentos Temporários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .footer {
            background-color: #000;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php require '../template/side_bar3.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Detentos (Temporários)</h2>
        <a class="btn btn-success mb-3" href="formDetentos.php">Adicionar Detento</a>
        <?php
        if (isset($_GET['delete'])) {
            $detento = $_GET['detento'];
        ?>
            <div class="alert alert-danger">
                Detento '<?php echo htmlspecialchars($detento, ENT_QUOTES, 'UTF-8'); ?>' deletado com Sucesso!
            </div>
        <?php
        }
        ?>
        <?php if (count($detentos) > 0) : ?>
            <?php
            if (isset($_GET['sucesso'])) {
                $nome = $_GET['nome'];
            ?>
                <div class="alert alert-success">
                    Detento(a) '<?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); ?>' cadastrado com Sucesso!
                </div>
            <?php
            }
            ?>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Motivo(detenção)</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Horário Detido</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Nasceu</th>
                        <th scope="col">Já foi preso?</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detentos as $detento) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($detento['id'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['nome'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['idade'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['motivo'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['cpf'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['horario'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['sexo'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['altura'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['nasceu'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($detento['preso_anteriormente'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td>
                                <form method="post" action='deleteDetentos.php'>
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($detento['id'], ENT_QUOTES, 'UTF-8'); ?>" />
                                    <input type="hidden" name="nome" value="<?php echo htmlspecialchars($detento['nome'], ENT_QUOTES, 'UTF-8'); ?>" />
                                    <button name="delete" class="btn btn-sm btn-danger" type="submit">Excluir</button>
                                    <a href="edit.php?id=<?php echo htmlspecialchars($detento['id'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-sm btn-outline-dark">Editar</a>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <h3>Sua delegacia não possui Detentos!</h3>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="JS/jquery-3.7.1.js"></script>
    <script src="script.js"></script>

</body>

</html>
