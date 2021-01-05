<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");
$result = mysqli_query($conn,"delete from cursos where id = '$id'");
if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../cursos.php'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>