<?php 
    $usuario = $_POST['field_usuario'];
    $senha   = $_POST['field_senha'];
    
    if (empty($usuario) OR empty($senha) ) {
        # se usuario ou senha estiverem vazios
        header("location: index.php?msg=usuario ou senha vazios");
        exit;
    }

    //conectar ao banco
    $host       = "localhost";
    $db         = "usuario_acl";
    $charset    = "utf8";
    $db_usuario = "root";
    $db_senha   = "root"; #bancodedados

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $connection = new PDO($dsn, $db_usuario, $db_senha);
    
