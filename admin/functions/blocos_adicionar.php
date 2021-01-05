<?php
require ("../connections/conn.php");
$sql="INSERT INTO blocos (titulo,resumo,descricao) VALUES ('$_POST[titulo]','$_POST[resumo]','$_POST[descricao]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../blocos.php'>";
mysqli_close($conn);
?>