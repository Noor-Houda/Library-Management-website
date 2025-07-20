<?php 
$idcon=mysqli_connect("localhost" ,"root", "");
 if($idcon) 
{ 
    $okbd=mysqli_select_db($idcon ,"bibliothéque"); 
    if($okbd==false) 
    echo "<br/>Base incorrect <br/>"; 
} 
else 
    echo"<h2>Erreur connection au serveur<h2>";

?>