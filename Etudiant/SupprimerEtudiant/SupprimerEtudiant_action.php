<?php include ("C:\\xampp\htdocs\TP5 web_dev\Etudiant\Shared code\connexion.php"); ?> 
<?php 
$codeE=$_POST['codeE']; 
$requet="delete from etudiant where CodeEtudiant = '$codeE'"; 
$ok= mysqli_query($idcon, $requet); 
if($ok==False) 
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Suppression</title>
    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Etudiant/Shared code/style_rep.css'>
</head>
<body>
    <div class='container'>
    <div class='container-text'>
    <img src='http://localhost/TP5 web_dev/Photos/decline.png'/>
        <h2>Probléme de suppression<h2>
            <br>
        <a href='SupprimerEtudiant.php'><button>Retour</button></a>
    </div>
    </div>
</body> </html>"; 
else echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Suppression</title>
    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Etudiant/Shared code/style_rep.css'>
</head>
<body>
    <div class='container'>
    <div class='container-text'>
    <img src='http://localhost/TP5 web_dev/Photos/mark.png'/>
        <h2>Suppression effectuée avec succes<h2>
            <br>
        <a href='SupprimerEtudiant.php'><button>Retour</button></a>
    </div>
    </div>
</body> </html>"
?> 
<?php include ("C:\\xampp\htdocs\TP5 web_dev\Etudiant\Shared code\déconnexion.php"); ?> 
