<?php

session_start();

$user = 'mama';
$password_definit ='mama';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username&&$password){
        if($username==$user&&$password==$password_definit){
            $_SESSION['username']=$username;
            header('Location: chaustore.php');
        }else{
            echo 'Incorrect username and/or password.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta charset="utf-8">
<title>Chaustore</title>
<link rel="stylesheet" href="style.css">
<script src="chaustore.js"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

<img id="logochaus"src="./image/LogoChaustore.jpg" alt="logochaustore"/>
    <!-- <H1> ADMINISTRATOR INTERFACE</H1> -->
<body>
        <div id="formConn"></div>
        <section id="formAdmin">

            <article class="connection">
              <h2>CONNEXION</h2>
            <form method="POST">
                <!-- ID -->
                <label for="">USERNAME</label>
                <input type="text" name="username" required>
                <br>
                <!-- MDP -->
                <label for="">PASSWORD</label>
                <input type="password" name="password" required>
                <br>
                <!-- BUTTON -->
                <input type="submit" name="submit" value="SEND">
            </form>
          </article>
          <article class="inscription">
            <h2>INSCRIPTION</h2>
            <form method="POST">
                <!-- ID -->
                <label for="">FIRSTNAME</label>
                <input type="text" name="username" required>
                <br>
                <label for="">LASTNAME</label>
                <input type="text" name="username" required>
                <br>
                <label for="">EMAIL</label>
                <input type="email" name="username" required>
                <br>
                <!-- MDP -->
                <label for="">PASSWORD</label>
                <input type="password" name="password" required>
                <br>
                <label class="container"><p>Oui, j'accepte les termes et conditions et confirme que j'ai lu et compris la politique de confidentialité de CHAUSTORE.*</p>
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <input type="submit" name="submit" value="SEND">

            </form>
          </article>
        </section>
    </div>
    <footer>
      <p>© 2019 Foot Locker. Tous droits réservés.</p>
</footer>
</body>
</html>
