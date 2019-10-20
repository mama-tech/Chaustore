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

      <!-- <H1> ADMINISTRATOR INTERFACE</H1> -->
<nav class="menu">
  <ul>
  <li><a href="disconnect.php">LOG OUT</a></li>
  <li><a href="boutique.php">GO TO E-SHOP</a></li>
  <li><a href="#ccbs">COLOR</a></li>
  <li><a href="#ccbs">SIZE</a></li>
  <li><a href="#ccbs">BRAND</a></li>
  <li><a href="#ccbs">PRICE</a></li>
  <li><a href="#stock">STOCKS</a></li>
  <li><a href="#ccbs">CATEGORY</a></li>
  <li><a href="#product">PRODUCT</a></li>
  <li><h3>Welcome, <?php echo $_SESSION['username']; ?><h3></li>
  </ul>
</nav>

<img id="logo"src="./image/LogoChaustore.jpg" alt="logochaustore"/>

<div class="positionProduct">
<div class="prdct">
<h2 id="product"> PRODUCT </h2>
<form action="view_product.php" method="post">
    <fieldset class="seeProduct">
      <legend>VIEW</legend>
          <input type = "submit" value = "View">
    </fieldset>
</form>
<br>

<form action="traitement.php" method="post"> <!-- FORMULAIRE POUR AJOUTER UN PRODUIT -->
  <fieldset class="addProduct">
    <legend>ADD </legend>
        <label> Add  </label>


          <label for="productName"> name :</label>
          <br>
            <input type="text" id="productName" name="productName" value=""/>
              <br/><br/>

          <label for="productCategory"> category :</label>
          <!-- CHOIX DE MA CATEGORIE -->
          <select name="select_category">
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
          <select name="select_brand">
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
          <select name="select_color">
                  <?php
                  $sql4 = "SELECT name from color";
                  $req4 = mysqli_query($conn,$sql4);
                  while ($row4 = mysqli_fetch_row($req4)){
                      echo '<option value="'.$row4[0].'">'.$row4[0].'</option>';
                  }
                  ?>
              </select>
                <br/><br/>

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
</div>
  <br>
<div class="prdct2">
<form action="" method="post"> <!-- FORMULAIRE POUR MODIFIER UN PRODUIT -->
  <fieldset class="editProduct">

        <legend> EDIT </legend>
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

            <br/>
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
     <legend> DELETE </legend>
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
</div>
</div>
<br/><br/><br/><br/>

<div class="positionStock">
<div class="stock">
        <h2 id="stock"> STOCKS </h2>
   <form action="view_stock.php" method="post">
     <fieldset class="rotatinglist">
       <legend>VIEW</legend>
      <input type = "submit" value = "View">
  </fieldset>

  <br>

   <fieldset class="rotatinglist">
   <legend>ADD - EDIT - DELETE</legend>

      <label> Add in :</label>
        <SELECT name="exp" size="1">
          <option>Stock</option>
        </SELECT>
        <br>
      <label> product.</label>
        <input type="text" name="category" value=""/>
      <label> size.</label>
        <input type="text" name="category" value=""/>
        <input type = "submit" value = "Add">
</fieldset>
    <br/>
  </div>
    <br>
  <div class="stock2">
<fieldset>
      <label> Edit </label>
        <SELECT name="exp" size="1">
          <option>Stock</option>
        </SELECT>
        <br/>
      <label> product.</label>
        <input type="text" name="category" value=""/>
      <label> size.</label>
        <input type="text" name="category" value=""/>
        <input type = "submit" value = "Edit">
</fieldset>
    <br>
<fieldset>
      <label> Delete in</label>
         <SELECT name="exp" size="1">
        <option>Stock</option>
         </SELECT>
         <br/>
      <label> product.</label>
        <input type="text" name="category" value=""/>
      <label> size.</label>
        <input type="text" name="category" value=""/>
        <input type = "submit" value = "Delete">
  </fieldset>
  </form>
</div>
</div>
<br/>
<br/>
<br/>
  <!-- FORMULAIRE POUR VOIR UNE CATEGORY COLOUR MARQUE ET TAILLE  -->
  <div class="positionAutre">
  <div class="ccbs">
  <h2 id="ccbs">CATEGORY - COLOR - BRAND - SIZE</h2>
  <form action="view_ccbs.php" method="post" enctype="multipart/form-data" ="traitement.php" >
  <fieldset class="rotatinglist">
    <legend>VIEW</legend>

        <label> See :</label>
          <SELECT name="see" size="1">
            <OPTION name="category">category</OPTION>
            <OPTION name="color">color</OPTION>
            <OPTION name="size">size</OPTION>
            <OPTION name="brand">brand</OPTION>
          </SELECT>
          <input type = "submit" value = "View">
  </fieldset>
  </form>

  <br>

<form action="add_ccbs.php" method="post" enctype="multipart/form-data" ="traitement.php" >
  <fieldset class="rotatinglist">
    <legend>ADD </legend>

        <label> Add in :</label>
          <SELECT name="add" size="1">
            <OPTION name="categoryadd">category</OPTION>
            <OPTION name="coloradd">color</OPTION>
            <OPTION name="sizeadd">size</OPTION>
            <OPTION name="brandadd">brand</OPTION>
          </SELECT>

        <label> Name.</label>
            <input type="text" name="valueadd" value=""/>
            <input type = "submit" value = "Add">
  </fieldset>
</form>
</div>
  <br>
<div class="ccbs2">
<form action="update_ccbs.php" method="post" enctype="multipart/form-data" ="traitement.php" >
  <fieldset>
        <legend>EDIT </legend>
          <SELECT name="edit" size="1">
            <OPTION>category</OPTION>
            <OPTION>color</OPTION>
            <OPTION>size</OPTION>
            <OPTION>brand</OPTION>
          </SELECT>

        <label> Name.</label>
          <input type="text" name="valueupdate" value=""/>
          <label> Name à modification.</label>
          <input type="text" name="valuedit" value=""/>
          <input type = "submit" value = "Edit">
</fieldset>
</form>
  <br>

<form action="traitement.php" method="post" enctype="multipart/form-data" ="traitement.php" >
  <fieldset>
       <legend> DELETE</legend>
          <SELECT name="delete" size="1">
            <OPTION>Category<OPTION>
            <OPTION>Color<OPTION>
            <OPTION>Size<OPTION>
            <OPTION>Brand<OPTION>
          </SELECT>

       <label> Name.</label>
          <input type="text" name="category" value=""/>
          <input type = "submit" value = "Delete">

      </fieldset>
</form>
</div>

  <?php
}
else {
  header('Location:admin.php');
}
?>


</body>
</html>
