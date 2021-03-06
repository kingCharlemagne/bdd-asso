<?php
require 'Controllers/bddLog.php';
if (isset($_POST) AND !empty($_POST)){
    $post=[];
    $errors =[];

    foreach ($_POST as $key=>$value){
        $post[$key]=strip_tags($value);
    }

    if (!isset($_POST['pseudo']) OR empty($post['pseudo'])){
        $errors[]='Le champ pseudo est vide';
    }

    if (!isset($_POST['password']) OR empty($post['password'])){
        $errors[]='Le champ mot de passe est vide';
    }

    if (empty($errors)){
        require 'Model/index_Select.php';

        if (count($user)===1){

            $mdpCrypt = $user[0]['password'];

        }else{
            $errors[]='Pseudo inconnue';
        }

        if(isset($mdpCrypt) && password_verify($post['password'], $mdpCrypt)){
            $_SESSION['PseudoUser']=$post['pseudo'];
            $_SESSION['role']=$user[0]['role'];
            header('Location: Views/accueil.php');
        }else{
            $errors[]='Mot de passe invalide';
        }

    }

}