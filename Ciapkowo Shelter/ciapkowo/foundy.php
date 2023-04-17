<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciapkowo - Znalezione</title>
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


    <div id="block1" style="background-image: url('img/kotttttt.jpg'); background-position: center 33%;">
        <div id="witaj">
            <span id="witajtekst">OGŁOSZENIA - ZNALEZIONE</span>
        </div>
    </div>
    <div id="block6">
    <?php
$conn = mysqli_connect('localhost','root','','schronisko');
require 'connect.php';
    
	// tworzymy krotkie nazwy zmiennych otrzymanych z formularza
	
    $res = mysqli_query($conn, 'SELECT * FROM found ORDER BY id DESC');
    $ilosc = mysqli_num_rows($res);


for($i=0; $i<$ilosc;$i++){
    $row = mysqli_fetch_array($res);
    echo '
    <div class="tabelki">
    <a href="detailsfound.php?ID='.$row['id'].'" target="_blank"><div class="paseczek"> <div id="formatsuper"><strong>ODNALEZIONE</strong></div></div>
            <center><div class="obrazekin">
            
                <img style="height: 198px;" src="'.$row['zdjecie'].'" alt="">
            </div></center>
         <p><b>'.$row['imie'].'</b> </p>
        <p>Wielkość: '.$row['wielkosc'].'</p>
        <p>Płeć: '.$row['plec'].'</p>
        <p>Sierść: '.$row['siersc'].'</p>
        <p>Miejsce odnalezienia: '.$row['miejsce'].'</p>
    </div></a>';
    
   
}



mysqli_close($conn);
?>


 



        
    
    </div>
    <footer>© Ciapkowo 2022</footer>
</body>
</html>