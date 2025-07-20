<?php

$idcon = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($idcon, "utf8"); 

$okbd = mysqli_select_db($idcon, 'bibliothéque');
$requet = 'SELECT * FROM emprunter';
$res = mysqli_query($idcon, $requet);    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
    <link rel="stylesheet" href="style_liste_empruntt.css">
</head>
<body>
<div id='container-Mother'>
<div id='nav'>
        <div id='Add'>
          <a href='http://localhost/TP5%20web_dev/Emprunts/emprunter_livre/emprunterLivre.php' target='_self'><img src='http://localhost/TP5 web_dev/Emprunts/Photos/add.png' alt='add' height='50px' /></a>
        </div>
        <div id='modification'>
          <a href='http://localhost/TP5%20web_dev/Emprunts/retourner_livre/retournerLivre.php' target='_self'><img src='http://localhost/TP5 web_dev/Emprunts/Photos/back.png' alt='ret' height='55px' /></a>
        </div>
        <div id='look'>
          <a href='http://localhost/TP5%20web_dev/Emprunts/liste_emprunt/listeEmprunt.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/list.png' alt='list' height='50px' /></a>
        </div>
        <div id='remove'>
          <a href='http://localhost/TP5%20web_dev/Emprunts/emprunts_index/emprut_index.html' target='_self'><img src='http://localhost/TP5 web_dev/Photos/door.png' alt='home' height='55px' /></a>
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
                    <th>Nom Livre</th>
                    <th>Code Etudiant</th>
                    <th>Etudiant</th>
                    <th>Date d'emprunte</th>
                </tr>
                <?php while($ligne = mysqli_fetch_array($res)) { 
                    $requet2 =  "SELECT Nom,Prenom FROM etudiant WHERE CodeEtudiant='$ligne[1]'";
                    $res2 = mysqli_query($idcon, $requet2);
                    $ligne2 = mysqli_fetch_array($res2);
                    $requet3 = "SELECT * FROM livre where CodeLivre='$ligne[0]'";
                    $res3 = mysqli_query($idcon, $requet3);
                    $ligne3 = mysqli_fetch_array($res3);
                    echo"<tr>
                        <td>$ligne3[0]</td>
                        <td>$ligne3[1]</td>
                        <td>$ligne[1]</td>
                        <td>$ligne2[0] $ligne2[1]</td>
                        <td>$ligne[2]</td>
                    </tr>";
                } ?>
            </table>
        </div>
    </div>
                </div>
</body>
</html>

<?php
mysqli_close($idcon);
?>
