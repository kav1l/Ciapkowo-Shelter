<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}

require '../connect.php';
$result = mysqli_query($conn, 'SELECT COUNT(id) FROM found');
$row = mysqli_fetch_array($result);

$result1 = mysqli_query($conn, 'SELECT COUNT(id) FROM zaginione');
$row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($conn, 'SELECT COUNT(id) FROM zwierzaki');
$row2 = mysqli_fetch_array($result2);

?>
<html>
<head>
    <title>Ciapkowo - Admin</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="admin.css">


</head>
    <body>
    <div class="container">
        <div class="logo">
            <a href="panel.php"><img src="../img/logo.png" alt="logo"></a>
        </div>

        <div class="navbar">
        <div class="icon-bar" onclick="Show()">
                <i></i>
                <i></i>
                <i></i>
            </div>

    <ul id="nav-lists">
        <li class="close"><span onclick="Hide()">×</span></li>
        <li><a href="przyjmowanie.php">DODAJ OGŁOSZENIA</a></li>
        <li><a href="edit.php">ZARZĄDZAJ OGŁOSZENIAMI</a></li>
        <li><a href="zgloszenia.php">ZOBACZ ZGŁOSZENIA</a></li>
        <li><a href="logout.php" style="color:#8b0000">WYLOGUJ</a></li>
    </ul>

    <script>
        var navList = document.getElementById("nav-lists");
        function Show() {
            navList.classList.add("_Menus-show");
        }

        function Hide() {
            navList.classList.remove("_Menus-show");
        }
    </script>


    </div></div>
		<h2 style="margin-left:10px;">Witaj w panelu Ciapkowa, <?php echo $_SESSION['username']; ?> </h2>
        <div id="info">

        
        
        <?php echo "Dzisiaj mamy " . date("d-m-Y") . " roku <br>"; ?>
        Aktualnie do adopcji znajduje się: <?php echo $row2['COUNT(id)'] ?> zwierząt <br>
        Zgłoszono łącznie: <?php echo $row1['COUNT(id)'] ?> zagubionych zwierząt <br>
        Zgłoszono łącznie: <?php echo $row['COUNT(id)'] ?> znalezionych zwierząt <br>
        </div>


        </div>
    </body>
</html>
<?php

?>