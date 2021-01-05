<?php
$id = intval($_REQUEST['id']);
$analytics = $_REQUEST['analytics'];
$description = $_REQUEST['description'];
$keywords = $_REQUEST['keywords'];

require("../connections/conn.php");
$sql = "update seo set analytics='$analytics',description='$description',keywords='$keywords' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../seo.php'>";
mysqli_close($conn);
?>
