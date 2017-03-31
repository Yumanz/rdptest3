
<?php
session_start();
include('entete.php');
// Définition des paramètres
$PARAM_hote='localhost';
$PARAM_port='3306';
$PARAM_nom_bd='rdptest1';
$PARAM_utilisateur='root'; 
$PARAM_mot_passe='Hehida852Agos';

try 
{
$bdd = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
}
// Récupération des messages d'erreur
catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
}

// Hachage du mot de passe

$pass_hache = sha1($_POST['mdp']);


// Insertion
 $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);// récupération des erreurs
$requete = $bdd->prepare('INSERT INTO clients(pseudo, pass_hache, nom, prenom, mail, date_inscription) VALUES( ? , ? , ? , ? , ? , CURDATE())');

$req->execute(array($_POST['pseudo'], $_POST['pass_hache'], $_POST['mail'], $_POST['nom'], $_POST['prenom']));

// Vide le cache, prêt pour une autre requête
$req->closeCursor()

?>