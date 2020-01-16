<?php
session_start();
include("conexao.php");

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select count(*) as total from estudante where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
   $_SESSION['usuario_existe'] = true;
   header('Location: cadastro.php');
   exit;
}

$sql = "INSERT INTO estudante(usuario, senha) VALUES ('$usuario','$senha')";

if($conexao->query($sql) === TRUE){
   $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>