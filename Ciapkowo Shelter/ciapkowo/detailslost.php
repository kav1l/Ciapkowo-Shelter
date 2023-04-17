
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciapkowo - Wiecej informacji</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="img/logo.png" alt="logo"></a>
        </div>
    <div class="navbar">
    
    <div class="icon-bar" onclick="Show()">
        <i></i>
        <i></i>
        <i></i>
    </div>
    
    <ul id="nav-lists">
        <li class="close"><span onclick="Hide()">×</span></li>
        <li><a href="adoptujmain.html">ADOPTUJ PUPILA</a></li>
        <li><a href="found.html">ZNALAZŁEM ZWIERZAKA</a></li>
        <li><a href="looking.html">ZGUBIŁEM ZWIERZAKA</a></li>
        <li><a href="contact.html">KONTAKT</a></li>
    </ul>
    
    </div>
    </div>

    <script>
        var navList = document.getElementById("nav-lists");
        function Show() {
        navList.classList.add("_Menus-show");
        }
        
        function Hide(){
        navList.classList.remove("_Menus-show");
        }
        </script>


    <div><div id="block6">
  <?php

if(isset($_GET['ID'])){
    require 'connect.php';
    $sql = 'SELECT * FROM zaginione WHERE id='.$_GET['ID'];
    $result= mysqli_query($conn,$sql) or die("nie tak");
    $row = mysqli_fetch_array($result);

    
        echo' 
        <div class="nasrodku">
    <h1><div id="formatsuper"> '.$row["imie"].'</div></h1>

    

        <h2><p> INFORMACJE O ZWIERZAKU</p></h2> 
    

            <div class="">
             <img id="detalZDJ" style="height: 10%;" src="'.$row['zdjecie'].'">
            </div>
           
        <h2><p>IMIĘ: '.$row["imie"].'</p></h2> 
        <p>GATUNEK: '.$row["gatunek"].'</p>
        <p>WIELKOŚĆ: '.$row["wielkosc"].'</p>
        <p>PŁEĆ: '.$row["plec"].'</p>
        <p>KOLOR: '.$row["kolor"].'</p>
        <p>DODATKOWE INFORMACJE OD SZUKAJĄCEGO: '.$row["info"].'</p>
    
    </div>


        ';}
        
else{
            header('location: lost.php');
        }
   




?>


</div>
    

    </div>
    <footer>© Ciapkowo 2022</footer>
</body>
</html>