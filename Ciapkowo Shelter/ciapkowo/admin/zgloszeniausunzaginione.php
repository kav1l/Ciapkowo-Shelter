<?php
$nm = $_GET['a'];
require '../connect.php';

$sql = "DELETE FROM zaginione WHERE id = $nm";
$result = mysqli_query($conn,$sql);

header("Location:zgloszenia.php"); 

?>