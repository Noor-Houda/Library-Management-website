<?php
$idcon = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($idcon, "utf8"); 

$okbd = mysqli_select_db($idcon, 'bibliothéque');
$requet = 'SELECT DISTINCT CodeEtudiant FROM emprunter;';
$res = mysqli_query($idcon, $requet);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <title>Modifier livre</title>
  <link rel='stylesheet' href='http://localhost/TP5 web_dev/Emprunts/Shared code/style_empruntt.css' />
  <style>
    #options_etud, #options_livre {
      width: 100%;
      border: none;
      padding: 14px;
      border-radius: 3px;
      border: 2px solid #DADDEC;
      margin: 5px 0 10px;
      font-size: 1rem;
      color: #656880;
    }
  </style>
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
      <div class='container'>
        <img src='book.jpg' alt='image'>
        <div class='container-text'>
          <h2>Retourner un livre</h2>
          <p>Veuillez remplir les champs suivants</p>

          <form action='retournerLivre.php' method='post'>
            <select name="codeE" id="options_etud" onchange="this.form.submit()">
              <option value="">Liste étudiant</option>
              <?php
              while($ligne = mysqli_fetch_array($res)) { 
                $requet2 =  "SELECT * FROM etudiant WHERE CodeEtudiant='$ligne[0]'";
                $res2 = mysqli_query($idcon, $requet2);
                $ligne2 = mysqli_fetch_array($res2);               
                $selected = (isset($_POST["codeE"]) && $_POST["codeE"] == $ligne2[0]) ? "selected" : "";
                echo "<option value='{$ligne2[0]}' $selected> {$ligne2[0]} | {$ligne2[1]} {$ligne2[2]}</option>";
              }
              ?>
            </select>
          </form>

          <?php if (!empty($_POST["codeE"])): 
            $codeE = mysqli_real_escape_string($idcon, $_POST["codeE"]);
            $requet = "SELECT DISTINCT CodeLivre FROM emprunter WHERE CodeEtudiant = '$codeE';";
            $res = mysqli_query($idcon, $requet);
          ?>
          <form action='retournerLivre_action.php' method='post'>
            <select name="codeL" id="options_livre">
              <option value="">Liste des livres</option>
              <?php 
              while($ligne = mysqli_fetch_array($res)) { 
                $requet2 =  "SELECT * FROM Livre WHERE CodeLivre = '{$ligne[0]}'";
                $res2 = mysqli_query($idcon, $requet2);               
                if ($ligne2 = mysqli_fetch_array($res2)) {
                  echo "<option value='{$ligne2[0]}'>{$ligne2[1]}</option>";
                }
              }
              ?>
            </select>
            <input type="hidden" name="codeE" value="<?php echo htmlspecialchars($codeE); ?>">
            <div id='buttons'>
              <button type='reset'>Annuler</button>
              <button type='submit'>Retourner</button>
            </div>
          </form>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
mysqli_close($idcon);
?>
