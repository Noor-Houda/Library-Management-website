<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Supprimer etudiant</title>
    <link rel='stylesheet' href='style_supprimerr.css'>
</head>
<body>
<div id='container-Mother'>
      <div id='nav'>
        <div id='Add'>
          <a href='http://localhost/TP5 web_dev/Etudiant/NouveauEtudiant/nouveauEtudiant.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/add.png' alt='add' height='50px' /></a>
        </div>
        <div id='modification'>
          <a href='http://localhost/TP5 web_dev/Etudiant/ModificationEtudiant/ModificationEtudiant.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/pen.png' alt='add' height='55px' /></a>
        </div>
        <div id='look'>
          <a href='http://localhost/TP5 web_dev/Etudiant/RechercheEtudiant/rechercheEtudiant.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/glass.png' alt='glass' height='50px' /></a>
        </div>
        <div id='remove'>
          <a href='http://localhost/TP5 web_dev/Etudiant/SupprimerEtudiant/SupprimerEtudiant.php' target='_self'><img src='http://localhost/TP5 web_dev/Photos/trash-bin.png' alt='remove' height='55px' /></a>
        </div>
        <div id='list'>
          <a href='http://localhost/TP5 web_dev/Etudiant/ListeEtudiant/listeEtudiant.php' target='_self'> <img src='http://localhost/TP5 web_dev/Photos/list.png' alt='list' height='55px' /></a>
        </div>
        <div id='home'>
          <a href='http://localhost/TP5%20web_dev/Etudiant/Etudiant_index/index.html' target='_self'> <img src='http://localhost/TP5 web_dev/Photos/door.png' alt='list' height='55px' /></a>
        </div>
      </div>
  <div id='other'>
    <div class='container'>
        <img
          src='bibimage.jpg'
          alt='image'>
        <div class='container-text'>
          <h2>Supprimer Etudiant</h2>
          <p>Veuillez remplir les champs suivants</p>
          <form action='SupprimerEtudiant_action.php' method='post'>
              <input type='text' name='codeE' id='code' placeholder='Code'>
              <div id='buttons'>
                <button type='reset' Value=''>Annuler</button>
                <button type='submit' value=''>Supprimer</button>
              </div>
          </form>
        </div>
      </div>
      </div>
</body>
</html>";