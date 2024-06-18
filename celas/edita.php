<?php
if (isset($_POST['submit'])) {
    if (
        isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['bloco']) && !empty($_POST['bloco']) &&
        isset($_POST['numero']) && !empty($_POST['numero']) ) {

        require '../conexao.php';
        $id = $_POST['id'];
        $bloco = $_POST['bloco'];
        $numero = $_POST['numero'];
        
        $sql = "UPDATE cela SET bloco = :bloco, numero = :numero WHERE id = :id";
        
        $resultado = $conn->prepare($sql);
        $resultado->bindValue(":id", $id);
        $resultado->bindValue(":bloco", $bloco);
        $resultado->bindValue(":numero", $numero);
        
        $resultado->execute();

        header("Location: index.php?cela=" . urlencode($bloco) . "&EDITADO=ok");
        exit();
    }
}
?>
