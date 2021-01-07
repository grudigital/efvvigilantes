<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$resumo = $_REQUEST['resumo'];
$descricao = $_REQUEST['descricao'];
$valores = $_REQUEST['valores'];
$documentosnecessarios = $_REQUEST['documentosnecessarios'];
$metodologia = $_REQUEST['metodologia'];
$avaliacao = $_REQUEST['avaliacao'];
$inicioproximaturma = $_REQUEST['inicioproximaturma'];
$informacoesproximaturma = $_REQUEST['informacoesproximaturma'];

require("../connections/conn.php");
$sql = "update cursos set titulo='$titulo',resumo='$resumo',descricao='$descricao',valores='$valores',documentosnecessarios='$documentosnecessarios',metodologia='$metodologia',avaliacao='$avaliacao',inicioproximaturma='$inicioproximaturma',informacoesproximaturma='$informacoesproximaturma' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../cursos.php'>";
mysqli_close($conn);
?>
