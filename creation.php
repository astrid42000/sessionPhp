<?php

include_once 'session.php';

//Creation nouvelle session
$new= new Session1();

//Attributs non existants
$new->prenom='astrid';
$new->nom='soulier';
$new->age=33;
//var_dump($_SESSION);


$visiteur= serialize($_SESSION);
//var_dump($visiteur);


$visiteur1= unserialize($visiteur);
//var_dump($visiteur1);



/*var_dump($_SESSION['prenom']);
var_dump($new->poids);
var_dump($new->prenom);*/

//Suprression attribut 'prenom'
$new->remove('prenom');
//var_dump($_SESSION);

?>
