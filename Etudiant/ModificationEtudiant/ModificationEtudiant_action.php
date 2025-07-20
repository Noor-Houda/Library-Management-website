<?php include ("C:\\xampp\htdocs\TP5 web_dev\Etudiant\Shared code\connexion.php"); ?> 
<?php 
$code=$_POST['code']; 
$nom=$_POST['nom']; 
$prenom=$_POST['prenom']; 
$adresse=$_POST['adresse']; 
$classe=$_POST['classe']; 
$requet="update etudiant set Nom='$nom', Prenom='$prenom', Adresse ='$adresse', Classe='$classe' where CodeEtudiant ='$code'"; 
$ok=mysqli_query($idcon, $requet); 
if($ok==FALSE) echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Modification</title>
                    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Etudiant/Shared code/style_rep.css'>
                </head>
                <body>
                    <div class='container'>
                    <div class='container-text'>
                    <img src='http://localhost/TP5 web_dev/Etudiant/decline.png'/>
                        <h2>Plobléme d'insertion<h2>
                            <br>
                        <a href='ModificationEtudiant.php'><button>Retour</button></a>
                    </div>
                    </div>
                </body> </html>"; 
else echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Modification</title>
                    <link rel='stylesheet' href='http://localhost/TP5 web_dev/Etudiant/Shared code/style_rep.css'>
                </head>
                <body>
                    <div class='container'>
                    <div class='container-text'>
                    <img src='http://localhost/TP5 web_dev/Etudiant/mark.png'/>
                        <h2>Etudiant Ajouter avec succès<h2>
                            <br>
                        <a href='ModificationEtudiant.php'><button>Retour</button></a>
                    </div>
                    </div>
                </body> </html>"; 
?> 
<?php include ("C:\\xampp\htdocs\TP5 web_dev\Etudiant\Shared code\déconnexion.php"); ?> 