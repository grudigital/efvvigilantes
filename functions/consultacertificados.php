<?php
$cpf = $_REQUEST['cpf'];
require("../admin/connections/conn.php");
$sql = "select * from alunos where cpf = '$cpf'";
$result = mysqli_query($conn, $sql);
$conta_registros = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) {
    $aluno = $row['id'];
}
if ($conta_registros != null) {
    echo "<meta http-equiv='refresh' content=0;url='../consulta_certificado.php?id=$aluno'>";
}else{
    echo "<meta http-equiv='refresh' content=0;url='../consulta_invalida.php'>";
}
mysqli_close($conn);
?>
