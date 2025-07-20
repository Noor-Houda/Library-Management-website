<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\connexion.php"); ?> 
<?php 
$champ=$_POST['options']; 
$valeur=$_POST['valeur']; 
$requet="select * from livre where $champ = '$valeur'"; 
$res= mysqli_query($idcon, $requet); 
$nbr=mysqli_num_rows($res); 
if($nbr==0)
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Suppression</title>
    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Livre/Livre/Shared code/style_rep_livre.css'>
</head>
<body>
    <div class='container'>
    <div class='container-text'>
    <img src='http://localhost/TP5 web_dev/Photos/decline.png'/>
        <h2>Livre non trouvé<h2>
            <br>
        <a href='rechercheLivre.php'><button>Retour</button></a>
    </div>
    </div>
</body> </html>"; 
else echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Suppression</title>
    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Livre/Livre/Shared code/style_rep_livre.css'>
</head>
<body>
    <div class='container'>
    <div class='container-text'>
    <img src='http://localhost/TP5 web_dev/Photos/mark.png'/>
        <h2>Le livre rechercher existe dans la base<h2>
            <br>
        <a href='rechercheLivre.php'><button>Retour</button></a>
    </div>
    </div>
</body> </html>"
?> 
<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\déconnexion.php"); ?> 