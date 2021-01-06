<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");
$result = mysqli_query($conn,"delete from certificados where id = '$id'");
if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../alunos.php'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>