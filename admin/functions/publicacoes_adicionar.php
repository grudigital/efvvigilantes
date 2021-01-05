<?php
require ("../connections/conn.php");
$sql="INSERT INTO publicacoes (titulo,resumo,descricao,datapublicacao) VALUES ('$_POST[titulo]','$_POST[resumo]','$_POST[descricao]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../publicacoes.php'>";
mysqli_close($conn);
?>