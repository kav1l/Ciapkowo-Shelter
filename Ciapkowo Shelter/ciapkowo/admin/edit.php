<?php
session_start();

require '../connect.php';
$sql = "SELECT * FROM zwierzaki";
$result = mysqli_query($conn, $sql);



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
        <p id="formatsuper" style="margin-left:10px; font-size:50px;" >ZARZĄDZAJ OGŁOSZENIAMI</p>
        <div id="info">
            <center>
		<table>
                        <tr>
                            <th>ID</th>
                            <th>IMIĘ</th>
                            <th>GATUNEK</th>
                            <th>RASA</th>
                            <th>PŁEĆ</th>
                            <th>ROZMIAR</th>
                            <th>WIEK</th>
                            <th>OPIS</th>
                            <th>ZDJĘCIE</th>
                            <th>USUŃ</th>
                        </tr>
                        <?php while($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['imie']; ?></td>
                            <td><?php echo $row['gatunek']; ?></td>
                            <td><?php echo $row['rasa']; ?></td>
                            <td><?php echo $row['plec']; ?></td>
                            <td><?php echo $row['rozmiar']; ?></td>
                            <td><?php echo $row['wiek']; ?></td>
                            <td><?php echo $row['opis']; ?></td>
                            <td><u><a href="<?php echo $row['zdjecie']; ?>" target="_blank">ZDJĘCIE</a></u></td>
                            
                            <td><a style=" color: red" href="del.php?a=<?php echo $row['id']; ?>">    X</a></td>
                        </tr>
                        <?php } ?>
                        </table></center>

    </body>
</html>