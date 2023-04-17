<?php
$nm = $_GET['a'];
require '../connect.php';

$sql = "DELETE FROM zwierzaki WHERE id = $nm";
$result = mysqli_query($conn,$sql);

header("Location:edit.php"); 

?>