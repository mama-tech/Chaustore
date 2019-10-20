<?php require_once 'connectDB.php'; ?>

<!-- PAGE POUR VOIR TES stock mais a revoir -->


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
            <th>Product</th>
            <th>Size</th>
            <th>Stock</th>
          </tr>
        </thead>
        <tbody>

          <!-- REQUETE AVEC LES LIAISONS -->

          <?php
          $query = 'SELECT product.name as product, size.name as size, stock as stock,
          FROM stock
          INNER JOIN product on product.id = product_id
          INNER JOIN size on size.id = size_id';
          $res = $mysqli->query($query);

          while ($row = mysqli_fetch_array($res)) {

            ?>

            <tr>
              <td><?php echo $row['product'] ?></td>
              <td><?php echo $row['size'] ?></td>
              <td><?php echo $row['stock'] ?></td>
            </tr>
          <?php  } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
