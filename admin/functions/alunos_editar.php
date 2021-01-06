<?php
$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$email = $_REQUEST['email'];
$whatsapp = $_REQUEST['whatsapp'];


require("../connections/conn.php");
$sql = "update alunos set nome='$nome',cpf='$cpf',email='$email',whatsapp='$whatsapp' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../alunos.php'>";
mysqli_close($conn);
?>
