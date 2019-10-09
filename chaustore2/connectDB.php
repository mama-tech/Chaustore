<?php
 $conn = mysqli_connect(/*'164.132.110.233'*/ '164.132.110.233', /*'simplon'*/ 'simplon', /*'xCIwyTKo3)?(31;*'*/ 'xCIwyTKo3)?(31;*') or die('Erreur de connexion.'); //se connecter à son compte mysql ("localhost","utilisateur_sql","mot de passe")
mysqli_select_db($conn,/*'simplon_chaustore'*/'simplon_chaustore'); //selectionner une database
mysqli_set_charset($conn,'utf8');
