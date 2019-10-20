<?php require_once('connectDB.php'); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chaustore - Traitement</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
  <h1> RESULTAT</h1>
<?php

  if(!empty($_POST)){

    $sql = "INSERT INTO ".$_POST['add']." SET name = '".$_POST['valueadd']."'";


      $res = $conn->query($sql);

      if($res){
          $msg = "Thank you, Your addition has been taken into account";
          $error = false;
      }
      else {
          $msg = "An error occured please try again later";
          $error = true;
      }
      echo $msg;
}



 ?>
 </body>
 </html>
