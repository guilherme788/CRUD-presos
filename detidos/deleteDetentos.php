<?php
if (isset($_POST['id'])) {
    require '../conexao.php';
    $detento = $_POST['nome'];
    $id = $_POST['id'];

    $sql = "DELETE FROM detentos WHERE id = :id";
    $resultado = $conn->prepare($sql);
    $resultado->bindValue(":id", $id);
    $resultado->execute();
    header("Location: detidos.php?detento=$detento&delete=ok");
    exit(); }
?>
