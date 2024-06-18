<?php
if (isset($_POST['submit'])) {
    if (
        isset($_POST['bloco']) && !empty($_POST['bloco']) &&
        isset($_POST['numero']) && !empty($_POST['numero'])
    ) {
        require '../conexao.php';
        $bloco = $_POST['bloco'];
        $numero = $_POST['numero'];

        $sql = "INSERT INTO cela(bloco, numero) VALUES (:bloco, :numero)";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue(":bloco", $bloco);
        $resultado->bindValue(":numero", $numero);       
        $resultado->execute();
        header("Location: index.php?nome=" . urlencode($bloco) . "&sucesso=ok");
        exit();
    }
}
