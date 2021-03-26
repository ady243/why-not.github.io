<?php
session_start();
require_once 'fufu.php';

if(isset($POST['nom'])&& isset($POST['prenom'])&& isset($POST['mail'])&& isset($POST['age'])&& isset($POST['sexe'])){
    
}

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$age = htmlspecialchars($_POST['age']);
$sexe = htmlspecialchars($_POST['sexe']);

$check = $bdd->prepare('SELECT nom, email FROM * utilisateurs WHERE email = ?');
$check->execute(array($email));
$data = $check->fetch();
$row = $check->rowcount();

if($row == 1){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        
    }
    
    
}

else header('Location:connection.php?login_err=email')


else header('Location:connection.php?login_err=already');
    


else header('Location:connection.html');
?>