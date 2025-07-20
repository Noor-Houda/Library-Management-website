<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\connexion.php"); ?> 
<?php 
$codeL=$_POST['codeL']; 
$codeE=$_POST['codeE'];  
$requet="insert into emprunter (CodeLivre,CodeEtudiant) values('$codeL','$codeE')"; 
$ok=mysqli_query($idcon, $requet); 
$requet="update livre set Qte=livre.Qte-1 where CodeLivre='$codeL'";
$ok=mysqli_query($idcon, $requet); 
if($ok==FALSE) echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Retourner</title>
                    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Emprunts/Shared code/style_rep_livree.css'>
                </head>
                <body>
                    <div class='container'>
                        <div class='container-text'>
                        <img src='http://localhost/TP5 web_dev/Livre/Photos/decline.png'/>
                            <h2>Problème de modification<h2>
                                <br>
                            <a href='emprunterLivre.php'><button>Retour</button></a>
                        </div>
                    </div>
                </body> </html>"; 
else echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Retourner</title>
                    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Emprunts/Shared code/style_rep_livree.css'>
                </head>
                <body>
                    <div class='container'>
                        <div class='container-text'>
                        <img src='http://localhost/TP5 web_dev/Photos/mark.png'/>
                            <h2>Livre retourner avec succès<h2>
                                <br>
                            <a href='emprunterLivre.php'><button>Retour</button></a>
                        </div>
                    </div>
                </body> </html>"; 
?> 
<?php include ("C:\\xampp\htdocs\TP5 web_dev\Livre\Shared code\déconnexion.php"); ?> 