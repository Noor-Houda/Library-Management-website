<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\connexion.php"); ?> 
<?php 
$code=$_POST['code']; 
$titre=$_POST['titre']; 
$auteur=$_POST['auteur']; 
$date=$_POST['date'];  
$requet="insert into livre values ('$code','$titre','$auteur','$date');"; 
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
                        <img src='http://localhost/TP5 web_dev/Livre/Photos/mark.png'/>
                            <h2Problème d'insertion<h2>
                                <br>
                            <a href='nouveauLivre.php'><button>Retour</button></a>
                        </div>
                    </div>
                </body> </html>"; 
else echo "<!DOCTYPE html>
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
                        <img src='http://localhost/TP5 web_dev/Livre/Photos/mark.png'/>
                            <h2>Livre Ajouté avec succès<h2>
                                <br>
                            <a href='nouveauLivre.php'><button>Retour</button></a>
                        </div>
                    </div>
                </body> </html>"; 
?> 
<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\déconnexion.php"); ?> 