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
// TRAITEMENT POUR AFFICHER TOUTES LES CATEGORIE , COLOUR, MARQUE ET TAILLE DES PRODUITS

 if(!empty($_POST)){

   $sql = "SELECT * FROM ".$_POST['see'].";";

   $select = mysqli_query($conn, $sql);
   ?>
   <table>
     <tr>
       <td>ID</td>
       <td>NAME</td>
     </tr>
    <?php
    while($s = mysqli_fetch_assoc($select)){
     ?>
     <tr>
       <td><?php echo $s['id']; ?></td>
       <td><?php echo $s['name']; ?></td>
     </tr>
    <?php
   }
   ?>
 </table>
 <?php
   if($select){
       $error = false;
   }
   else {
       $msg = "An error occured please try again later";
       $error = true;
   }
 }
 ?>
 </body>
 </html>
