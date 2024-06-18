<?php
if (isset($_POST['id'])) {
    require '../conexao.php';
    $id = $_POST['id'];
    $bloco = $_POST['bloco'];
    $numero= $_POST['numero'];

    $sql = "DELETE FROM cela WHERE id = :id";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":id", $id, PDO::PARAM_INT);
    $resultado->execute();
    header("Location: index.php?cela=$bloco&delete=ok");
    exit();
}
?>
