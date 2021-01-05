<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$resumo = $_REQUEST['resumo'];
$descricao = $_REQUEST['descricao'];

require("../connections/conn.php");
$sql = "update publicacoes set titulo='$titulo',resumo='$resumo',descricao='$descricao' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../publicacoes.php'>";
mysqli_close($conn);
?>
