<?php
require ("../connections/conn.php");

$sql="INSERT INTO alunos (nome,cpf,email,whatsapp) VALUES ('$_POST[nome]','$_POST[cpf]','$_POST[email]','$_POST[whatsapp]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../alunos.php'>";
mysqli_close($conn);
?>


