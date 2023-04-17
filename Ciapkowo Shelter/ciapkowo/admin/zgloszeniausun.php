<?php
$nm = $_GET['a'];
require '../connect.php';

$sql = "DELETE FROM found WHERE id = $nm";
$result = mysqli_query($conn,$sql);

header("Location:zgloszenia.php"); 

?>