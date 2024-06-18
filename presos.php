<?php
session_start();
require 'conexao.php';
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

$sql = "SELECT p.id, p.nome, p.idade, p.peso, p.altura, p.sexo, p.altura, p.data_liberacao, p.crime, p.data_prisao, c.bloco as bloco, c.numero as numeroCela
FROM presos as p 
JOIN cela as c 
ON p.cela_id = c.id ";
$resultado = $conn->prepare($sql);
$resultado->execute();
$presos = $resultado->fetchALL(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="CSS/sidebar.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    require './template/side_bar2.php'
    ?>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Presos</h2>
        <a class="btn btn-success mb-3" href="formPresos.php">Adicionar Preso</a>
        <?php

        if (isset($_GET['delete'])) {
            $nomePreso = $_GET['nome_preso'];
        ?>
            <div class="alert alert-danger">

                Preso '<?php echo $nomePreso; ?>' deletado com Sucesso!
            </div>
        <?php
        }
        ?>
        <?php if (count($presos) > 0) : ?>
            <?php
            if (isset($_GET['sucesso'])) {
                $nomePreso = $_GET['nome_preso'];
            ?>
                <div class="container mt-5">
                    <div class="alert alert-success">
                        Preso '<?php echo $nomePreso; ?>' Cadastrado com Sucesso!
                    </div>
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
                        <th scope="col">Gênero</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Data de Prisão</th>
                        <th scope="col">Data de Liberação</th>
                        <th scope="col">Crime</th>
                        <th scope="col">Cela</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($presos as $preso) : ?>
                        <tr>
                            <td><?php echo $preso['id']; ?></td>
                            <td><?php echo $preso['nome']; ?></td>
                            <td><?php echo $preso['idade']; ?></td>
                            <td><?php echo $preso['sexo']; ?></td>
                            <td><?php echo $preso['altura']; ?></td>
                            <td><?php echo $preso['peso']; ?></td>
                            <td><?php echo $preso['data_prisao']; ?></td>
                            <td><?php echo $preso['data_liberacao']; ?></td>
                            <td><?php echo $preso['crime']; ?></td>
                            <td><?php echo $preso['bloco'] . " | " . $preso['numeroCela']; ?></td>
                            <td>
                                <form method="post" action='verify/delete.php'>
                                    <input type="hidden" name="id" value="<?php echo $preso['id']; ?>" />
                                    <input type="hidden" name="nome" value="<?php echo $preso['nome']; ?>" />
                                    <button class="btn btn-sm btn-danger" type="submit">Excluir</button>
                                    <a href="verify/updateAtualizado.php?id=<?php echo  $preso['id'] ?>" class="btn btn-sm btn-outline-dark">Editar</a>
                                </form>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <h3>Sua delegacia não possui Presos!</h3>
        <?php endif; ?>
    </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="JS/jquery-3.7.1.js"></script>
    <script src="script.js"></script>
</body>

</html>