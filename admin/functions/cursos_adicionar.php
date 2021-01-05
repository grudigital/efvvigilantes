<?php
require ("../connections/conn.php");
$sql="INSERT INTO cursos (titulo,resumo,descricao,inicioproximaturma,informacoesproximaturma,datainclusao) VALUES ('$_POST[titulo]','$_POST[resumo]','$_POST[descricao]','$_POST[inicioproximaturma]','$_POST[informacoesproximaturma]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../cursos.php'>";
mysqli_close($conn);
?>