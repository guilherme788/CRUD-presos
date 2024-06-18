<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['nome']) && !empty($_POST['nome']) &&
         isset($_POST['idade']) && !empty($_POST['idade']) &&
         isset($_POST['motivo']) && !empty($_POST['motivo']) &&
         isset($_POST['cpf']) && !empty($_POST['cpf']) &&
         isset($_POST['horario']) && !empty($_POST['horario']) &&
         isset($_POST['sexo']) && !empty($_POST['sexo']) &&
         isset($_POST['altura']) && !empty($_POST['altura']) &&
         isset($_POST['nasceu']) && !empty($_POST['nasceu']) &&
         isset($_POST['preso_anteriormente']) && !empty($_POST['preso_anteriormente'])){

            require '../conexao.php';
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $motivo = $_POST['motivo']; 
            $cpf = $_POST['cpf'];
            $horario = $_POST['horario'];          
            $sexo = $_POST['sexo'];
            $altura = $_POST['altura'];
            $nasceu = $_POST['nasceu'];
            $preso_anteriormente = $_POST['preso_anteriormente'];


            $sql = "INSERT INTO detentos(nome, idade, motivo, cpf, horario, sexo, altura, nasceu , preso_anteriormente) VALUES (:nome, :idade, :motivo, :cpf,:horario, :sexo, :altura, :nasceu , :preso_anteriormente)";
            $resultado = $conn->prepare($sql);
            $resultado->bindValue(":nome", $nome);
            $resultado->bindValue(":idade", $idade);
            $resultado->bindValue(":motivo", $motivo);
            $resultado->bindValue(":cpf", $cpf);
            $resultado->bindValue(":horario", $horario);
            $resultado->bindValue(":sexo", $sexo);
            $resultado->bindValue(":altura", $altura);
            $resultado->bindValue(":nasceu", $nasceu);
            $resultado->bindValue(":preso_anteriormente", $preso_anteriormente);


            $resultado->execute();

            
            header("Location: detidos.php?nome=" . urlencode($nome) . "&sucesso=ok");
            exit();
         } 
    }
    
?>
