
 <?php
$serveur = "localhost";
$base = "site";
$user = "localhost";
$pass = "";

/*
$mysqli est une nouvelle instance de la classe mysqli
prédéfinie dans php et hérite donc de ses propriétés et méthodes
connexion à la base de données
*/
$mysqli = new mysqli($serveur, $user, $pass, $base);
// si la connexion se fait en UTF-8, sinon ne rien indiquer
$mysqli->set_charset("utf8");
/*
utilisation de la méthode connect_error
qui renvoie un message d'erreur si la connexion échoue
*/
if ($mysqli->connect_error) {
    die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
?> 

 <?php
if ($mysqli->connect_error) {
    echo 'connexion impossible... :'.$mysqli->connect_error;
}
else {
    echo 'connexion réussie : '.$mysqli->host_info;
    echo "<br><br> <br> <h1> <center>félicitation ! </center></h1>  ";
}
?> 

 <?php
$mysqli->close();
?> 