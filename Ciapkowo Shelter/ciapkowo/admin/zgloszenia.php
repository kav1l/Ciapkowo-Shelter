<?php
session_start();

require '../connect.php';
$sql = "SELECT * FROM found";
$sql1 = "SELECT * FROM zaginione";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);



if(!isset($_SESSION['username'])){
   header("Location:index.php");
}
?>
<html>
<head>
    <title>Ciapkowo - Admin</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="admin.css">

    <style>
        table {
            background-color: #FFFFFF;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #01B636;
  border-style: solid;
  color: #000000;
        }

        th {
            border-collapse: collapse;
            border-width: 2px;
  border-color: #01B636;
  border-style: solid;
  padding: 5px;
  background-color: #74e39a;
        }
        td {
            border-collapse: collapse;
            border-width: 2px;
  border-color: #01B636;
  border-style: solid;
  padding: 5px;
            
        }
        
        </style>


</head>
    <body>

    <div class="container" style="width:100%; vertical-align: middle;">
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
        <p id="formatsuper" style="margin-left:10px; font-size:50px;" >ZARZĄDZAJ ZGŁOSZENIAMI</p>
        <h2 style="margin-left:10px;" id="formatsuper">ZNALEZIONE</h2>
        <div id="info">
		<table>
                        <tr>
                            <th>ID</th>
                            <th>IMIĘ</th>
                            <th>PŁEĆ</th>
                            <th>WIELKOŚĆ</th>
                            <th>KOLOR</th>
                            <th>SIERŚĆ</th>
                            <th>MIEJSCE</th>
                            <th>ZDJĘCIE</th>
                            <th>DANE ZGŁASZAJĄCEGO</th>
                            <th>NR. TEL</th>
                            <th>E-MAIL</th>
                            <th>USUŃ</th>
                        </tr>
                        <?php while($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['imie']; ?></td>
                            <td><?php echo $row['plec']; ?></td>
                            <td><?php echo $row['wielkosc']; ?></td>
                            <td><?php echo $row['kolor']; ?></td>
                            <td><?php echo $row['siersc']; ?></td>
                            <td><?php echo $row['miejsce']; ?></td>
                            <td><u><a href="../<?php echo $row['zdjecie']; ?>" target="_blank">ZDJĘCIE</a></u></td>
                            <td><?php echo $row['daneszuk']; ?></td>
                            <td><?php echo $row['nrtele']; ?></td>
                            <td><?php echo $row['email']; ?></td>

                            
                            <td><a style="color: red;" href="zgloszeniausun.php?a=<?php echo $row['id']; ?>">X</a></td>
                        </tr>
                        <?php } ?>
                        </table>
                        </div>
                        <h2 style="margin-left:10px;" id="formatsuper">ZAGINIONE</h2>
        <div id="info">
		<table>
                        
        <tr>
                            <th>ID</th>
                            <th>IMIĘ</th>
                            <th>GATUNEK</th>
                            <th>WIEK</th>
                            <th>PŁEĆ</th>
                            <th>WIELKOŚĆ</th>
                            <th>SIERŚĆ</th>
                            <th>INFORMACJE</th>
                            <th>KOLOR</th>
                            <th>MIEJSCE ZNALEZIENIA</th>
                            <th>ZDJĘCIE</th>
                            <th>IMIE NAZWISKO SZUKAJĄCEGO</th>
                            <th>E-MAIL</th>
                            <th>UWAGI</th>
                            <th>USUŃ</th>
                        </tr>
                        <?php while($row = mysqli_fetch_array($result1)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['imie']; ?></td>
                            <td><?php echo $row['gatunek']; ?></td>
                            <td><?php echo $row['wiek']; ?></td>
                            <td><?php echo $row['plec']; ?></td>
                            <td><?php echo $row['wielkosc']; ?></td>
                            <td><?php echo $row['siersc']; ?></td>
                            <td><?php echo $row['info']; ?></td>
                            <td><?php echo $row['kolor']; ?></td>
                            <td><?php echo $row['miejsce']; ?></td>
                            <td><u><a href="../<?php echo $row['zdjecie']; ?>" target="_blank">ZDJĘCIE</a></u></td>
                            <td><?php echo $row['daneszuk']; ?></td>
                            <td><?php echo $row['nrtele']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            
                            <td><a style="color:red;" href="zgloszeniausunzaginione.php?a=<?php echo $row['id']; ?>">X</a></td>
                        </tr>
                        <?php } ?>
                        </table>
                        </div>

    </body>
</html>