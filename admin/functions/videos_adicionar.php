<?php
require ("../connections/conn.php");
$sql="INSERT INTO galeriavideos (video) VALUES ('$_POST[video]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../videos.php'>";
mysqli_close($conn);
?>