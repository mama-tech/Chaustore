<?php session_start(); ?>
<?php require_once 'connectDB.php'; ?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chaustore</title>
  <link rel="stylesheet" href="style.css">
  <script src="chaustore.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
  <?php include_once('headerDeconnect.php');
  if(isset($_SESSION['username'])){ ?>
  <header>
  <img src="./image/LogoChaustore.jpg" alt="logochaustore"/>
      <!-- <H1> ADMINISTRATOR INTERFACE</H1> -->
  </header>

      <h2> PRODUCT </h2>

<form action="view_product.php" method="post">
    <fieldset class="seeProduct">
      <legend>VIEW</legend>
          <label> See </label>
          <input type = "submit" value = "View">
    </fieldset>
</form>
<br>




<form action="" method="post"> <!-- FORMULAIRE POUR AJOUTER UN PRODUIT -->
  <fieldset class="addProduct">
    <legend>ADD - EDIT - DELETE</legend>
        <label> Add  </label>


          <label for="productName"> name :</label>
            <input type="text" id="productName" name="productName" value=""/>


          <label for="productCategory"> category :</label>
          <!-- CHOIX DE MA CATEGORIE -->
          <select name="select_category" form="">
                  <?php
                  $sql2 = "SELECT name from category";
                  $req2 = mysqli_query($conn,$sql2);
                  while ($row2 = mysqli_fetch_row($req2)){
                      echo '<option value="'.$row2[0].'">'.$row2[0].'</option>';
                  }
                  ?>
              </select>


          <label for="productBrand"> brand :</label>
          <!-- CHOIX DE MA MARQUE -->
          <select name="select_brand" form="">
                  <?php
                  $sql3 = "SELECT name from brand";
                  $req3 = mysqli_query($conn,$sql3);
                  while ($row3 = mysqli_fetch_row($req3)){
                      echo '<option value="'.$row3[0].'">'.$row3[0].'</option>';
                  }
                  ?>
              </select>


          <label for="productColor"> color :</label>
          <!-- CHOIX DE MA COULEUR -->
          <select name="select_color" form="">
                  <?php
                  $sql4 = "SELECT name from color";
                  $req4 = mysqli_query($conn,$sql4);
                  while ($row4 = mysqli_fetch_row($req4)){
                      echo '<option value="'.$row4[0].'">'.$row4[0].'</option>';
                  }
                  ?>
              </select>


          <label for="productPrice"> price :</label>
          <!-- CHOIX DE MON PRIX -->
            <input type="number" id="productPrice"name="productPrice" value=""/>


          <label for="productGender"> gender :</label>
          <!-- CHOIX DU GENRE -->
            <input type="radio" id="productGender" name="productGender" value="Female"/>
              <label for="">Female</label>
            <input type="radio" id="productGender" name="productGender" value="Male"/>
              <label for="">Male</label>


            <input type = "submit" value = "Add">
  </fieldset>
</form>
  <br>

<form action="" method="post"> <!-- FORMULAIRE POUR MODIFIER UN PRODUIT -->
  <fieldset class="editProduct">

        <label> Edit in : </label>
        <!-- CHOIX DE MA CATEGORIE -->
        <select name="select_brand" form="">
                <?php
                $sql2 = "SELECT name from product";
                $req2 = mysqli_query($conn,$sql2);
                while ($row2 = mysqli_fetch_row($req2)){
                    echo '<option value="'.$row2[0].'">'.$row2[0].'</option>';
                }
                ?>
            </select>


          <label> name :</label>
          <!-- CHOIX DU NOM -->
          <input type="text" name="productEdit" value=""/>


              <label> category :</label>
              <!-- CHOIX DE LA CATEGORIE -->
              <select name="select_category" form="">
                      <?php
                      $sql2 = "SELECT name from category";
                      $req2 = mysqli_query($conn,$sql2);
                      while ($row2 = mysqli_fetch_row($req2)){
                          echo '<option value="'.$row2[0].'">'.$row2[0].'</option>';
                      }
                      ?>
                  </select>


          <label> brand :</label>
          <!-- CHOIX DE LA MARQUE -->
          <select name="select_brand" form="">
                  <?php
                  $sql2 = "SELECT name from brand";
                  $req2 = mysqli_query($conn,$sql2);
                  while ($row2 = mysqli_fetch_row($req2)){
                      echo '<option value="'.$row2[0].'">'.$row2[0].'</option>';
                  }
                  ?>
              </select>


              <label> color.</label>
              <!-- CHOIX DE LA COULEUR -->
              <select name="select_color" form="">
                      <?php
                      $sql2 = "SELECT name from color";
                      $req2 = mysqli_query($conn,$sql2);
                      while ($row2 = mysqli_fetch_row($req2)){
                          echo '<option value="'.$row2[0].'">'.$row2[0].'</option>';
                      }
                      ?>
                  </select>


          <label> price :</label>
          <!-- CHOIX DU PRIX -->
          <input type="number" name="productEdit" value=""/>

          <label> gender :</label>
          <input type="radio" id="productGender" name="productGender" value="Female"/>
            <label for="">Female</label>
          <input type="radio" id="productGender" name="productGender" value="Male"/>
            <label for="">Male</label>

          <input type = "submit" value = "Edit">
  </fieldset>
</form>
   <br>

<form action="" method="post"> <!-- FORMULAIRE POUR SUPPRIMER UN PRODUIT -->
   <fieldset class="deleteProduct">
          <label> Delete | </label>
          <select name="select_brand" form="">
                  <?php
                  $sql2 = "SELECT name from product";
                  $req2 = mysqli_query($conn,$sql2);
                  while ($row2 = mysqli_fetch_row($req2)){
                      echo '<option value="'.$row2[0].'">'.$row2[0].'</option>';
                  }
                  ?>
              </select>
          <input type = "submit" value = "Delete">
  </fieldset>
</form>

        <h2> STOCKS </h2>
   <form action="view_stock.php" method="post">
     <fieldset class="rotatinglist">
       <legend>VIEW</legend>
      <label> See |</label>
      <input type = "submit" value = "View">
  </fieldset>

  <br>

   <fieldset class="rotatinglist">
   <legend>ADD - EDIT - DELETE</legend>

      <label> Add in :</label>
        <SELECT name="exp" size="1">
          <OPTION>Stock
        </SELECT>

      <label> product.</label>
        <input type="text" name="category" value=""/>
      <label> size.</label>
        <input type="text" name="category" value=""/>
        <input type = "submit" value = "Add">

    <br>

      <label> Edit in : </label>
        <SELECT name="exp" size="1">
          <OPTION>Stock
        </SELECT>

      <label> product.</label>
        <input type="text" name="category" value=""/>
      <label> size.</label>
        <input type="text" name="category" value=""/>
        <input type = "submit" value = "Edit">

    <br>

      <label> Delete in</label>
         <SELECT name="exp" size="1">
            <OPTION>Stock
         </SELECT>

      <label> product.</label>
        <input type="text" name="category" value=""/>
      <label> size.</label>
        <input type="text" name="category" value=""/>
        <input type = "submit" value = "Delete">
  </fieldset>
  </form>


  <h2>CATEGORY - COLOR - BRAND - SIZE</h2>
  <form action="traitement.php" method="post" enctype="multipart/form-data" ="traitement.php" >

  <fieldset class="rotatinglist">
    <legend>VIEW</legend>

        <label> See :</label>
          <SELECT name="exp" size="1">
            <OPTION>Category
            <OPTION>Color
            <OPTION>Size
            <OPTION>Brand
          </SELECT>

        <label> </label>
          <SELECT name="nom" size="1">
            <OPTION>name
          </SELECT>
          <input type = "submit" value = "View">

  </fieldset>

  <br>

  <fieldset class="rotatinglist">
    <legend>ADD - EDIT - DELETE </legend>

        <label> Add in :</label>
          <SELECT name="exp" size="1">
            <OPTION>Category
            <OPTION>Color
            <OPTION>Size
            <OPTION>Brand
          </SELECT>

        <label> Name.</label>
            <input type="text" name="category" value=""/>
            <input type = "submit" value = "Add">


  <br>
        <label> Edit in : </label>
          <SELECT name="exp" size="1">
            <OPTION>Category
            <OPTION>Color
            <OPTION>Size
            <OPTION>Brand
          </SELECT>

        <label> Name.</label>
          <input type="text" name="category" value=""/>
          <input type = "submit" value = "Edit">


  <br>
       <label> Delete in</label>
          <SELECT name="exp" size="1">
            <OPTION>Category
            <OPTION>Color
            <OPTION>Size
            <OPTION>Brand
          </SELECT>

       <label> Name.</label>
          <input type="text" name="category" value=""/>
          <input type = "submit" value = "Delete">

      </fieldset>
  </form>
  <?php
}
else {
  header('Location:admin.php');
}
?>
</body>
</html>
