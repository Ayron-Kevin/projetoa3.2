<?php

session_start();

include('coenxao.php');

$senha = isset($_POST['senha']) ? $_POST ['senha'] : '';
$confirmarsenha = isset($_POST['confirmarsenha'
]) ? $_POST['confirmarsenha'] :'';

$confirmarsenha = isset()

if($senha <> $confirmarsenha) {
    echo '<script>alert("Usuário ou senha incorretos");
    window.location="index.php";
    </script>';
} else {
    $cpf = $SESSION['cpf'];
    
}



?>