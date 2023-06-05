<?php
    include("./connection.php");

    $nomeUser = $_POST["nomeUser"];
    $emailUser = $_POST["emailUser"];
    $senhaUser = $_POST["senhaUser"];
    $senhaRepetidaUser = $_POST["senhaRepetidaUser"];

    echo($nomeUser);
    echo($emailUser);
    echo($senhaUser);

    try {
        $stmt = $pdo->prepare('INSERT INTO usuario (Nome, Email, Senha) VALUES(:nomeUser, :emailUser, :senhaUser)');
        $stmt->execute(array(
            ':nomeUser' => $nomeUser,
            ':emailUser' => $emailUser,
            ':senhaUser' => $senhaUser,
        ));
        header("Location: ../index.html");
        die();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    
