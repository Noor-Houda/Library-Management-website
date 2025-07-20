<?php

$idcon = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($idcon, "utf8"); 

$okbd = mysqli_select_db($idcon, 'bibliothéque');
$requet = 'SELECT * FROM etudiant';
$res = mysqli_query($idcon, $requet);

?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Modifier lirvre</title>
    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Emprunts/Shared code/style_empruntt.css' />
  </head>
  <body>
  <style>
  #options_etud,
  #options_livre {
  width: 100%;
  border: none;
  padding: 14px;
  border-radius: 3px;
}
#options_etud,
#options_livre{
  border: 2px solid #DADDEC;
  margin: 5px 0 10px;
  font-size: 1rem;
  color: #656880;
}
</style>
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
    <div class='container'>
        <img
          src='livre.jpg'
          alt='image'>
        <div class='container-text'>
          <h2>Emprunter un livre<h2>
            <p>Veuillez remplir les champs suivants</p>
            <form action='emprunterLivre_action.php' method='post'>
              <select name="codeE" id="options_etud">
                <option value="" default>Liste étudiant</option>
                <?php
                while($ligne = mysqli_fetch_array($res)) {                
                  echo "<option value='$ligne[0]'> $ligne[0] | $ligne[1] $ligne[2]</option>";
                } ?>
                </select>
                <select name="codeL" id="options_livre">
                <option value="" default>Liste des livre disponibles</option>
                <?php 
                $requet = "SELECT * FROM livre where Qte >0";
                $res = mysqli_query($idcon, $requet);
                while($ligne = mysqli_fetch_array($res)) {                
                  echo "<option value='$ligne[0]'>$ligne[0] | $ligne[1] | $ligne[2] | $ligne[3] copie(s)</option>";
                } ?>
                </select>
              <div id='buttons'>
              <button type='reset'>Annuler</button>
                <button type='submit'>Confirmer</button>
              </div>
          </form>
        </div>
      </div>
      </div>
</body>
</html>
<?php
mysqli_close($idcon);
?>