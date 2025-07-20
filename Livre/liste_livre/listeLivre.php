<?php

$idcon = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($idcon, "utf8"); 

$okbd = mysqli_select_db($idcon, 'bibliothéque');
$requet = 'SELECT * FROM livre';
$res = mysqli_query($idcon, $requet);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
    <link rel="stylesheet" href="style_liste_livre.css">
</head>
<body>
<div id='container-Mother'>
      <div id='nav'>
      <div id='Add'>
          <a href='http://localhost/TP5 web_dev/Livre/nouveau_livre/nouveauLivre.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/add.png' alt='add' height='50px' /></a>
        </div>
        <div id='modification'>
          <a href='http://localhost/TP5 web_dev/Livre/modification_livre/modificationLivre.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/pen.png' alt='add' height='55px' /></a>
        </div>
        <div id='look'>
          <a href='http://localhost/TP5 web_dev/Livre/recherche_livre/rechercheLivre.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/glass.png' alt='glass' height='50px' /></a>
        </div>
        <div id='remove'>
          <a href='http://localhost/TP5 web_dev/Livre/supprimer_livre/supprimerLivre.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/trash-bin.png' alt='remove' height='55px' /></a>
        </div>
        <div id='list'>
          <a href='http://localhost/TP5 web_dev/Livre/liste_livre/listeLivre.php' target='_self'> <img src='http://localhost/TP5 web_dev/Photos/list.png' alt='list' height='55px' /></a>
        </div>
        <div id='home'>
          <a href='http://localhost/TP5%20web_dev/Livre/Livres_index/livre_index.html' target='_self'> <img src='http://localhost/TP5 web_dev/Photos/door.png' alt='list' height='55px' /></a>
        </div>
      </div>
  <div id='other'>
    <div class="container">
        <div class="container-text">
            <h2>Liste des Livres</h2>
            <p>voiçi la liste des Livres</p>
            <table id="tab">
                <tr>
                    <th>Code Livre</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Quntité</th>
                    <th>Date d'édition</th>
                </tr>
                <?php while($ligne = mysqli_fetch_array($res)) { ?>
                    <tr>
                        <td><?php echo $ligne[0]; ?></td>
                        <td><?php echo $ligne[1]; ?></td>
                        <td><?php echo $ligne[2]; ?></td>
                        <td><?php echo $ligne[3]; ?></td>
                        <td><?php echo $ligne[4]; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
                </div>
</body>
</html>

<?php
mysqli_close($idcon);
?>
