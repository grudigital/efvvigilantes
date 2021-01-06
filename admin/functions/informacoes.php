<?php
$id = intval($_REQUEST['id']);
$cep = $_REQUEST['cep'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$email = $_REQUEST['email'];
$telefone1 = $_REQUEST['telefone1'];
$telefone2 = $_REQUEST['telefone2'];
$telefone3 = $_REQUEST['telefone3'];
$telefone4 = $_REQUEST['telefone4'];
$facebook = $_REQUEST['facebook'];
$instagram = $_REQUEST['instagram'];

require("../connections/conn.php");
$sql = "update informacoes set cep='$cep',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',cidade='$cidade',estado='$estado',email='$email',telefone1='$telefone1',telefone2='$telefone2',telefone3='$telefone3',telefone4='$telefone4',facebook='$facebook',instagram='$instagram' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../informacoes.php'>";
mysqli_close($conn);
?>
