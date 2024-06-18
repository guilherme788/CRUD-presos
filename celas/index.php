<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

require '../conexao.php';

$sql = "SELECT * FROM cela";
$resultado = $conn->prepare($sql);
$resultado->execute();
$celas = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php require '../template/side_bar4.php'; ?>

    <div class="container mt-5">
        <?php if (isset($_GET['delete']) && $_GET['delete'] == 'ok' && isset($_GET['cela'])) : ?>
            <div class="alert alert-danger">
                Cela do bloco '<?php echo htmlspecialchars($_GET['cela']); ?>' excluída com sucesso!
            </div>
        <?php endif; ?>

        <h2 class="mb-4">Celas Disponíveis</h2>
        <a class="btn btn-success mb-3" href="formCela.php">Adicionar Cela</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Bloco</th>
                    <th scope="col">Número</th>
                    <th scope="col" class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($celas as $cela) : ?>
                    <tr>
                        <td><?php echo $cela['id']; ?></td>
                        <td><?php echo $cela['bloco']; ?></td>
                        <td><?php echo $cela['numero']; ?></td>
                        <td class="text-end">
                            <form method="post" action="deleteCela.php">
                                <input type="hidden" name="id" value="<?php echo $cela['id']; ?>" />
                                <input type="hidden" name="bloco" value="<?php echo $cela['bloco']; ?>" />
                                <input type="hidden" name="numero" value="<?php echo $cela['numero']; ?>" />
                                <button class="btn btn-sm btn-danger" type="submit">Excluir</button>
                                <a type="submit" href="formEdita.php" class="btn btn-sm btn-outline-dark">Editar</a>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>