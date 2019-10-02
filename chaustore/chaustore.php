
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chaustore</title>
  <link rel="stylesheet" href="chaustore.css">
  <script src="chaustore.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
  <header>
  <img src="./image/LogoChaustore.jpg" alt="logochaustore"/>
      <H1> ADMINIDTRATOR INTERFACE</H1>
  </header>

      <h2> PRODUCT </h2>

<form action="traitement.php" method="post" enctype="multipart/form-data" ="traitement.php" >

    <fieldset class="seeProduct">
      <legend>VIEW</legend>
          <label> See:</label>
          <SELECT name="productView" size="1">
          <OPTION>All Product
          </SELECT>
          <input type = "submit" value = "View">
    </fieldset>
</form>
<br>

<form action="traitement.php" method="post" enctype="multipart/form-data" ="traitement.php" >
  <fieldset class="addProduct">
    <legend>ADD - EDIT - DELETE</legend>
        <label> Add in:</label>
          <SELECT name="productAdd" size="1">
          <OPTION>Product
          </SELECT>

          <label for="productName"> name.</label>
            <input type="text" id="productName" name="productName" value=""/>
          <label for="productCategory"> category.</label>
            <input type="text" id="productCategory"name="productCategory" value=""/>
          <label for="productBrand"> brand.</label>
            <input type="text" id="productBrand"name="productBrand" value=""/>
          <label for="productColor"> color.</label>
            <input type="text" id="productColor"name="productColor" value=""/>
          <label for="productPrice"> price.</label>
            <input type="text" id="productPrice"name="productPrice" value=""/>
          <label for="productGender"> gender.</label>
            <input type="text" id="productGender"name="productGender" value=""/>
            <input type = "submit" value = "Add">
  </fieldset>
</form>
  <br>

<form action="traitement.php" method="post" enctype="multipart/form-data" ="traitement.php" >
  <fieldset class="editProduct">
        <label> Edit in : </label>
          <SELECT name="productEdit" size="1">
          <OPTION>Product
          </SELECT>

          <label> name.</label>
          <input type="text" name="productEdit" value=""/>
              <label> category.</label>
          <input type="text" name="productEdit" value=""/>
          <label> brand.</label>
          <input type="text" name="productEdit" value=""/>
              <label> color.</label>
          <input type="text" name="productEdit" value=""/>
          <label> price.</label>
          <input type="text" name="productEdit" value=""/>
          <label> gender.</label>
          <input type="text" name="productEdit" value=""/>

          <input type = "submit" value = "Edit">
  </fieldset>
</form>
   <br>

<form action="traitement.php" method="post" enctype="multipart/form-data" ="traitement.php" >
   <fieldset class="deleteProduct">
          <label> Delete in</label>
          <SELECT name="productDelete" size="1">
          <OPTION>Product
          </SELECT>

          <label> name.</label>
          <input type="text" name="productDelete" value=""/>
              <label> category.</label>
          <input type="text" name="productDelete" value=""/>
          <label> brand.</label>
          <input type="text" name="productDelete" value=""/>
              <label> color.</label>
          <input type="text" name="productDelete" value=""/>
          <label> price.</label>
          <input type="text" name="productDelete" value=""/>
          <label> gender.</label>
          <input type="text" name="productDelete" value=""/>
          <input type = "submit" value = "Delete">
  </fieldset>
</form>

        <h2> STOCKS </h2>
   <form action="declaration.php" method="post" enctype="multipart/form-data" ="declaration.php" >

  <fieldset class="rotatinglist">
  <legend>VIEW</legend>

      <label> See :</label>
        <SELECT name="exp" size="1">
          <OPTION>All stock
          <OPTION>Product stock
          <OPTION>Size stock
        </SELECT>
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
</body>
</html>
