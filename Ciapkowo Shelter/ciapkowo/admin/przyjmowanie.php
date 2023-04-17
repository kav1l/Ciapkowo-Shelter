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

		<p id="formatsuper" style="margin-left:10px; font-size:50px;" >DODAJ OGŁOSZENIE</p>
        <div id="info">
		<section class="main" id="services">
        <div class="oddzial px-4">
            <div class="row gx-4 justify-content-center">
                <div class="columna1">
                </div>
                <div class="columna2">
                    <div class="col-sm-11">
                        <strong>Gatunek</strong>
                    </div>
                   <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <select class="form-select" name="gatunek" required>
                                <option selected> </option>
                                <option value="pies">Pies</option>
                                <option value="kot">Kot</option>
                                <option value="inne">Inne zwierzątko</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-11">
                        <strong>Imię lub nazwa na jaką reaguje</strong>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="text" name="imie" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-11">
                    <strong>Rasa</strong>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="text" name="rasa" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-11">
                        <strong>Płeć</strong>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <select class="form-select" name="plec" required>
                                <option selected> </option>
                                <option value="samiec">Samiec</option>
                                <option value="samica">Samica</option>
                            </select>
                        </div>
                        <div class="col-sm-11">
                    <strong>Wiek</strong>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="text" name="wiek" class="form-control required">
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-11">
                        <strong>Wielkość</strong>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <select class="form-select" name="rozmiar" required>
                                <option selected> </option>
                                <option value="mały">Mały </option>
                                <option value="średni">Średni </option>
                                <option value="duży">Duży </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-11">
                        <strong>Kolor</strong>
                    </div>
                    <div class="col-sm-12">
                        <select class="form-select" name="color" required>
                            <option selected></option>
                            <option value="jasny">jasny</option>
                            <option value="ciemny">ciemny</option>
                            <option value="trikolor">trikolor</option>
                            <option value="podpalany">podpalany</option>
                            <option value="szary">szary</option>
                            <option value="czarny">czarny</option>
                            <option value="brązowy">brązowy</option>
                            <option value="inny">inny</option>
                        </select>
                    </div>
                    <div class="col-sm-11">
                        <strong>Sierść</strong>
                    </div>
                    <div class="col-sm-12">
                        <select class="form-select" name="siersc" required>
                            <option selected></option>
                            <option value="krótka">krótka</option>
                            <option value="długa">długa</option>
                            <option value="szorstka">szorstka</option>
                            <option value="inna">inna</option>
                        </select>
                    </div>
                    <div class="col-sm-11">
                        <strong>Informacje</strong>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <textarea name="info" rows="5"></textarea>
                        </div>
                    </div>
                    

                    <div class="col-sm-11">
                        <strong>Zdjecie zwierzątka</strong>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="file" id="zdjecieUpload" name="zdjecieUpload" class="form-control" accept="image/png, image/jpg" required>
                        </div>
                    </div>
                    <input type="submit" value="Dodaj ogloszenie" class="btn" style="background-color: orange;">
                </p>
                </div>
</form>
            </div>

    </body>



</html>


