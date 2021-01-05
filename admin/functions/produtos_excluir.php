<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "update produtos set status='5' where id='$id'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_excluidos.php'>";
mysqli_close($conn);
?>
