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

if (isset($_POST['productView'])) {
$sql = ' select name from product ;';
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
echo($row[0]."".$row[1]."<br>");
$row = mysqli_fetch_array($result);
echo($row[0]."".$row[1]."<br>");
}

if(!empty($_POST)){

   $msg = "";

    if(empty($_POST['productAdd'])){
        $msg .= "- Please select Product !.<br/>";
    }
    if(empty($_POST['productName'])){
        $msg .= "- Please enter this field name .<br/>";
    }
    if(empty($_POST['select_category'])){
        $msg .= "- Please enter this field category .<br/>";
    }
    if(empty($_POST['select_brand'])){
        $msg .= "- Please enter this field brand .<br/>";
    }
    if(empty($_POST['select_color'])){
        $msg .= "- Please enter this field color .<br/>";
    }
    if(empty($_POST['productPrice'])){
        $msg .= "- Please enter this field price .<br/>";
    }
    if(empty($_POST['productGender'])){
        $msg .= "- Please enter this field gender.<br/>";
    }
    if(empty($msg)){
        $msg ="- Congratulations, your products are added.<br/>";
    }
    var_dump($_POST);
    $req = "INSERT INTO product (
            name,
            category_id,
            brand_id,
            color_id,
            price,
            gender)
            VALUES ('".$_POST['productName']."',
            (select id from category where name = '".$_POST['select_category']."'),
            (select id from brand where name = '".$_POST['select_brand']."'),
            (select id from color where name = '".$_POST['select_color']."'),
            '".$_POST['productPrice']."',
            '".$_POST['productGender']."')";

      $res = $conn->query($req);

      if($res){
          $msg = "Thank you".$_POST['productAdd'].", Your registration has been taken into account";
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
