<?php
echo" <!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Chercher livre</title>
    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Livre/Shared code/style_livre.css' />
  </head>
  <body>
  <style>
  #options {
  width: 100%;
  border: none;
  padding: 14px;
  border-radius: 3px;
}
#options{
  border: 2px solid #DADDEC;
  margin: 5px 0 10px;
  font-size: 1rem;
  color: #656880;
}
</style>
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
        <div class='container'>
          <img src='livresjpg.jpg' alt='image' />
          <div class='container-text'>
            <h2>Rechercher un Livre</h2>
            <p>Veuillez choisier le critére de selection</p>
            <form action='rechercherLivre_action.php' method='post'>
              <select name='options' id='options'>
                <option value='' default >critére</option>
                <option value='Titre'>Titre</option>
                <option value='Auteur'>Auteur</option>
                <option value='DateEdition'>Date d'édition</option>
              </select>
              <input type='text' name='valeur' id='valeur' placeholder='Valeur'>
              <div id='buttons'>
              <button type='reset'>Annuler</button>
                <button type='submit'>Rechercher</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

"
?>