<?php
session_start();
require 'conexao.php';
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
};?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require './template/side_bar4.php'
    ?>
</body>
</html>