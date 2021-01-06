<?php
$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$avaliacao = $_REQUEST['avaliacao'];

require("../connections/conn.php");
$sql = "update avaliacoes set nome='$nome',avaliacao='$avaliacao' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../avaliacoes.php'>";
mysqli_close($conn);
?>
