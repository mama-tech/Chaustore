<?php require_once 'connectDB.php'; ?>

<!-- PAGE POUR VOIR TES PRODUITS -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
     <a class="boutonRetour" href="chaustore.php"><img id="imgBoutton" src="./image/retour.png" alt="retour à la page précédente" height=50px width=50px></a>
    <div class="tableau">
      <table class="monTableau">
        <thead>
          <tr>
            <th>n°</th>
            <th>Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Color</th>
            <th>Image</th>
            <th>Price</th>
            <th>Gender</th>
          </tr>
        </thead>
        <tbody>

          <!-- REQUETE AVEC LES LIAISONS -->

          <?php
          $sql = 'SELECT product.id,
          product.name as productname,
          category.name as categoryname,
          brand.name as brandname,
          color.name as colorname,
          product.image as productimage,
          product.price as productprice,
          product.gender as productgender
          FROM product,color,brand,category
          WHERE product.category_id=category.id
          AND product.color_id=color.id
          AND product.brand_id=brand.id
          -- AND product.id=8';

          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {

            ?>

            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['productname'] ?></td>
              <td><?php echo $row['categoryname'] ?></td>
              <td><?php echo $row['brandname'] ?></td>
              <td><?php echo $row['colorname'] ?></td>
              <td><?php echo $row['productimage'] ?></td>
              <td><?php echo $row['productprice'] ?> $</td>
              <td><?php echo $row['productgender'] ?></td>
            </tr>
          <?php  } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
