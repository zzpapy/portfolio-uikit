<?php 
include 'models/ContactManager.class.php';
// $db = mysqli_connect("localhost", "root", "", "contact");

$PARAM_hote='localhost'; // le chemin vers le serveur
$PARAM_port='3306';
$PARAM_nom_bd='contact'; // le nom de votre base de données
$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
$PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter
// $db = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
try
{
    $db = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
}
 
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}
$manager = new ContactManager($db);
$result=$manager->findAll($db);
if(!empty($result)){
    $i=0;
    while($i<sizeof($result)){
        // var_dump($result[$i]);die;
        $id=$result[$i]['id'];
        $nom=$result[$i]['nom'];
        $mess=$result[$i]['mess'];
        $date=$result[$i]['date'];
        require 'affich.php';		
        $i++;
    }
}
?>