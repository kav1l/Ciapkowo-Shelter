<?php
$target_dir = "img/usr/";
$target_file = $target_dir . basename($_FILES["zdjecieUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["zdjecieUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["zdjecieUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["zdjecieUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

require 'connect.php';


$gatunek = $_POST['gatunek'];
$imie = $_POST['imie'];
$plec = $_POST['plec'];

$rozmiar = $_POST['rozmiar'];
$color = $_POST['color'];
$siersc = $_POST['siersc'];
$miejsce = $_POST['miejsce'];

$dane = $_POST['dane'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$inne = $_POST['inne'];


$sql = "INSERT INTO found(id, imie, plec, wielkosc, kolor, 
siersc, miejsce, zdjecie, daneszuk, nrtele, email, uwagi)
VALUES ('','$imie','$plec','$rozmiar','$color',
'$siersc','$miejsce','$target_file','$dane','$phone','$email','$inne')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Dziękujemy za zgłoszenie zwierzaka! Zostaniesz przekierowany za 2 sekundy na stronę dodania.</h2>";
    header('Refresh: 1; URL=foundy.php'); 
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }

mysqli_close($conn);

?>
