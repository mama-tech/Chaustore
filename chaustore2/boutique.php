<?php session_start(); ?>
<?php require_once 'connectDB.php'; ?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chaustore - Boutique</title>
  <link rel="stylesheet" href="boutique.css">
  <script src="chaustore.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
  <!-- MENU NAVIGATION - QUI VA PERMETTRE DE SE CONNECTER/INSCRIPTION RETOUR AU FICHIER ADMIN.php
                  - QUI VA PERMETTRE DE VOIR LES PRODUITS, LES CATEGORY ET LES PRIX -->
  <ul>
  <li><a href="admin.php">CONNECTION / INSCRIPTION</a></li>
  <li><a href="">PRICE</a></li>
  <li><a href="">CATEGORY</a></li>
  <li><a href="">PRODUCT</a></li>
</ul>
<div class="logosearch">
 <!-- LOGO CHAUSTAURE -->
  <img id="logo"src="./image/LogoChaustore.jpg" alt="logochaustore"/>
<!-- CHAMPS POUR RECHERCHER DANS LA PAGE  -->
<div class="recherche">
<input class="search "type="text" name="rechercher" autocomplete="off" data-searchsuggest-input="" data-searchsuggest="" data-searchsuggest-url="boutique.php" data-default-value="Enter your search here" data-testid="fl-search-box-field" data-bind="textInput: enteredSearchTerm, event: {change: search, keyup: search}" placeholder="
Enter your search">
<!-- BOUTON POUR LA RECHERCHE PAS ENCOR FONCTIONEL A REVOIR  -->
<button class="searchbutton" data-testid="fl-search-box-button" type="submit" aria-label="Recherche"><span class="larecherche">SEARCH</span>
</button>
</div>
<!-- BOUTON/LIEN POUR LE PANIER PAS ENCOR FONCTIONEL A REVOIR  -->
<a class="boutonPanier" href="panier.php"><img id="imgPanier" src="https://st2.depositphotos.com/6628792/9630/v/950/depositphotos_96308306-stock-illustration-shopping-cart-icon.jpg" alt="panier" height=50px width=50px></a>
</div>
<section>
  <!-- IMAGE DE PRESENTATION DE LA BOUTIQUE CHAUSTORE -->
  <img src="https://www.footlocker.fr/INTERSHOP/static/WFS/Footlocker-Footlocker_FR-Site/-/Footlocker/fr_FR/webp/HOMEPAGE_Elements/Banners/2019/footlocker/trail/mixbrands-trail-asp-1308x500.jpg.webp" alt="image pour la presentation de chaussure"/>
  <article>
    <div class="produit">
      <div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="http://www.la-violetera.com/wp-content/uploads/2018/12/sneakers-chuck-taylor-all-star-hi-m-blanc-optical-converse-homme.jpg" alt="Converse" width="600" height="400">
  </a>
  <div class="desc">All Star Dainty Canvas Ox W Blanc Optical</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="http://www.osteopathe-soula.fr/image/cache/data/category_14/adidas_originals_superstar_w_baskets_femme_noir___blanc_chaussures_femme_3tgif024e-500x500.jpg" alt="allstar" width="600" height="400">
  </a>
  <div class="desc">Superstar W Blanc Noir</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="http://www.basedechamps.fr/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/a/d/adidas_gazelle_w_rose-824kjt.jpg" alt="chaussure rose" width="600" height="400">
  </a>
  <div class="desc">Gazelle W Rose Blanc</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://photos6.spartoo.com/photos/413/4139941/4139941_350_A.jpg" alt="cortez bleu" width="600" height="400">
  </a>
  <div class="desc">Wmns Classic Cortez Leather Blanc Rouge Bleu</div>
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://cdn.pji.nu/product/standard/280/692739.jpg" alt="gazelle blanc" width="600" height="400">
  </a>
  <div class="desc">Gazelle W Gris Blanc</div>
</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="img_mountains.jpg">
        <img src="https://i.pinimg.com/originals/0e/cd/0f/0ecd0f3d738fcc550069affc37c06977.jpg" alt="gazelle blanc" width="600" height="400">
      </a>
      <div class="desc">Suede Hyper Embelished Wn's Black White</div>
    </div>
        </div>
        <div class="gallery">
          <a target="_blank" href="img_mountains.jpg">
            <img src="https://www.media-rdc.com/medias/1d50a2947b9538b08d423e6b9569b3c9/p_580x580/adidas-originals-superstar-fondation-blancnoiror.jpg" alt="gazelle blanc" width="600" height="400">
          </a>
          <div class="desc">Superstar Blanc Noir</div>
        </div>
            </div>
          </div>
          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJryYO3ho2O7MbKmR3t_P9CAxscz-wpUkDL4UpdZ_YXUAkQxBC" alt="stansmith noir" width="600" height="400">
            </a>
            <div class="desc">Stan Smith Noir</div>
          </div>
              </div>
    <div class="produitautre">
    </div>
  </article>
</section>
</body>
</html>
