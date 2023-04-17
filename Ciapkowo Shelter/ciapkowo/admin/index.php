<?php
   ob_start();
   session_start();
   if(isset($_SESSION['username'])){ // jeśli sesja już istnieje -> przenieś do panelu
      header("Location:panel.php");
   }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        .wrapper{
            width: 360px; 
            padding: 20px;
            color: white;
            background-color: #3bd16f;
            border: 2px solid #01b636;
        
        }
        body {
            background-image: url('../img/logowanietlo.jpg');
            background-position: center 0%;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Mont;
        }
    </style>
</head>
<body>
    <center>
    <div class="wrapper">
        <h1 id="formatsuper">LOGOWANIE</h1>
        <p id="mont">Proszę się zalogować aby uzyskać dostęp do panelu administracji.</p>

        <?php 
        if(!empty($login_err)){
            echo ' class="alert alert-danger">' . $login_err . '==';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="username" class="form-control">
            </div>    
            <div class="form-group">
                <label>Hasło</label>
                <input type="password" name="password" class="form-control">
                
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Zaloguj się" class="btn" style="background-color: #74e39a;">
            </div> <br><br>
           
        </form>
    </div></center>
             <?php
            require '../connect.php';
             
             //Jeśli przycisk 'Zaloguj się' został wciśnięty oraz zostało wpisane login hasło zacznij weryfikować
             //sha1 jako szyfrowanie haseł
             if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
 
                $login1 = $_POST['username'];
                $haslo1 = sha1($_POST['password']);

 
                $sql = "SELECT * FROM pracownicy WHERE login = '$login1' AND passwd = '$haslo1'";
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
 

                // jeśli znaleziono przynajmniej jeden taki rekord który jest w bazie -> stwórz sesję dla użytkownika i przenieś go do panelu
                if($count > 0){
 
                   $_SESSION['valid'] = true;
                   $_SESSION['timeout'] = time();
                   $_SESSION['username'] = $_POST['username'];
 
                   header("Location:panel.php"); 
                } else {
                   echo "<center><h1>Niepoprawny login i/lub hasło</h1></center>";
                }
             
                 
 
 
             }
          ?>
</body>
</html>