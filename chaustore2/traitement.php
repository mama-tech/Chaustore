<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chaustore - Traitement</title>
  <link rel="stylesheet" href="chaustore.css">
  <script src="chaustore.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
  <h1> RESULTAT</h1>
<?php
$conn = mysqli_connect('164.132.110.233','simplon','xCIwyTKo3)?(31;*');
mysqli_select_db($conn,'simplon_chaustore');
mysqli_set_charset($conn,'utf8');


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
    if(empty($_POST['productCategory'])){
        $msg .= "- Please enter this field category .<br/>";
    }
    if(empty($_POST['productCategory'])){
        $msg .= "- Please enter this field brand .<br/>";
    }
    if(empty($_POST['productColor'])){
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
}
    //
    // if(!empty($msg)){
    //     $msg = "- Error. Please check your entry :<br/>".$msg;
    //     $error = true;
    // }
    // else {
    //   $conn = mysqli_connect('164.132.110.233','simplon','xCIwyTKo3)?(31;*');
    //   mysqli_select_db($conn,'simplon_chaustore');
    //   mysqli_set_charset($conn,'utf8');
    //   if (!$conn) {
    //       echo "Error: Can not connect to MySQL." . PHP_EOL;
    //       echo "Debug error : " . mysqli_connect_errno() . PHP_EOL;
    //       echo " Debug error: " . mysqli_connect_error() . PHP_EOL;
    //       exit;
    //   }
      $req = "INSERT INTO product (
              name,
              category_id,
              brand_id,
              color_id,
              price,
              gender)
              VALUES (
              '".$_POST['productName']."',
              '".$_POST['productCategory']."',
              '".$_POST['productBrand']."',
              '".$_POST['productColor']."',
              '".$_POST['productPrice']."',
              '".$_POST['productGender']."'
              )";

        $res = $link->query($req);

        if($res){
            $msg = "Thank you".$_POST['productAdd'].", Your registration has been taken into account";
            $error = false;
        }
        else {
            $msg = "An error occured please try again later";
            $error = true;
        }

//     echo '<p>' .$msg. '</p>';
// }

?>
</body>
</html>
