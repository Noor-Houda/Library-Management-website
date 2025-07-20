<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\connexion.php"); ?> 
<?php 
$code=$_POST['code']; 
$titre=$_POST['titre']; 
$auteur=$_POST['auteur']; 
$date=$_POST['date'];  
$requet="update livre set Titre='$titre', Auteur ='$auteur', DateEdition='$date' where CodeLivre='$code'"; 
$ok=mysqli_query($idcon, $requet); 
if($ok==FALSE) echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Ajout</title>
                    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Livre/Shared code/style_rep_livre.css'>
                </head>
                <body>
                    <div class='container'>
                        <div class='container-text'>
                        <img src='http://localhost/TP5 web_dev/Livre/Photos/decline.png'/>
                            <h2>Problème de modification<h2>
                                <br>
                            <a href='modificationLivre.php'><button>Retour</button></a>
                        </div>
                    </div>
                </body> </html>"; 
else echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Ajout</title>
                    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Livre/Livre/Shared code/style_rep_livre.css'>
                </head>
                <body>
                    <div class='container'>
                        <div class='container-text'>
                        <img src='http://localhost/TP5 web_dev/Photos/mark.png'/>
                            <h2>Livre modifié avec succès<h2>
                                <br>
                            <a href='modificationLivre.php'><button>Retour</button></a>
                        </div>
                    </div>
                </body> </html>"; 
?> 
<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\déconnexion.php"); ?> 