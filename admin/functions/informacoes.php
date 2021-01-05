<?php
$id = intval($_REQUEST['id']);
$cep = $_REQUEST['cep'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$email = $_REQUEST['email'];
$telefone1 = $_REQUEST['telefone1'];
$telefone2 = $_REQUEST['telefone2'];
$telefone3 = $_REQUEST['telefone3'];
$telefone4 = $_REQUEST['telefone4'];

require("../connections/conn.php");
$sql = "update informacoes set cep='$cep',logradouro='$logradouro',numero='$numero',complemento='$complemento',cidade='$cidade',estado='$estado',email='$email',telefone1='$telefone1',telefone2='$telefone2',telefone3='$telefone3',telefone4='$telefone4' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../informacoes.php'>";
mysqli_close($conn);
?>
