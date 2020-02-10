<?php 
// var_dump($_POST);die;
include '../models/ContactManager.class.php';
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
    // var_dump($db);die;
if(isset($_POST["Envoyer"])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $mail=$_POST["mail"];
    $tel=$_POST["tel"];
    $mess=$_POST["mess"];
    $date=date('d-m-y H:i:s');
    $manager = new ContactManager($db);
    $test=$manager->create($db,$nom,$prenom,$date,$mail,$tel,$mess);
        $headers2 = "From:" . $mail;
        $success=mail('gregory.pace@hotmail.fr','test','ototototototot');
        if (!$success) {
            $errorMessage = error_get_last()['message'];
            // var_dump($success);die;
            
        }
        header("Location: ../index.php");
		exit;
    }
?>