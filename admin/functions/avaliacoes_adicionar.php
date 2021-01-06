<?php
require ("../connections/conn.php");

$sql="INSERT INTO avaliacoes (nome,avaliacao) VALUES ('$_POST[nome]','$_POST[avaliacao]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../avaliacoes.php'>";
mysqli_close($conn);
?>


