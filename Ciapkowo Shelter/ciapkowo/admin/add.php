<?php
$target_dir = "img/";
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



require '../connect.php';


$gatunek = $_POST['gatunek'];
$imie = $_POST['imie'];
$plec = $_POST['plec'];
$rasa = $_POST['rasa'];
$rozmiar = $_POST['rozmiar'];
$wiek = $_POST['wiek'];
$siersc = $_POST['siersc'];
$info = $_POST['info'];



$sql = "INSERT INTO zwierzaki (id, imie, gatunek, rasa, plec, rozmiar, wiek, opis, zdjecie) VALUES ('','$imie','$gatunek','$rasa','$plec','$rozmiar','$wiek','$info','$target_file')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Dodano nowego zwierzaka!</h1>";
    header('Refresh: 2; URL=przyjmowanie.php'); 
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }

mysqli_close($conn);

?>