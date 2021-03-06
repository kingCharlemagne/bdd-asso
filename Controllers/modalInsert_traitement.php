<?php
if (!empty($_POST) AND isset($_POST)){
    $errors=[];
    $post=[];

    foreach ($_POST as $key=>$value){
        $post[$key]= strip_tags(trim($value));
    }

    //categorie
    if($post['categorie'] === 'null'){
        $errors[]='Champ Catégorie vide, choisir une option';
    }

    //jour
    if($post['jour'] === 'null'){
        $errors[]='Champ Jour vide, choisir une option';
    }

    //atelier
    if(empty($post['atelier']) OR !isset($post['atelier'])){
        $errors[]='Champ lieu vide, saisir un lieu';
    }

    //adresse
    if(empty($post['address']) OR !isset($post['address'])){
        $errors[]='Champ address vide, saisir une adresse';
    }

    //horaireStart
    if(empty($post['horaireStart']) OR !isset($post['horaireStart'])){
        $errors[]='Champ lieu horaire, saisir une valeur';
    }


    //horaireEnd
    if(empty($post['horaireEnd']) OR !isset($post['horaireEnd'])){
        $errors[]='Champ lieu horaire, saisir une valeur';
    }

    //benevole
    if(empty($post['benevole']) OR !isset($post['benevole'])){
        $errors[]='Champ lieu vide, saisir une valeur';
    }


    if (empty($errors)){
        switch ($post['jour']){
            case "lundi":
                $id_jour=1;
                break;
            case "mardi":
                $id_jour=2;
                break;
            case "mercredi":
                $id_jour=3;
                break;
            case "jeudi":
                $id_jour=4;
                break;
            case "vendredi":
                $id_jour=5;
                break;
        }
        require 'bddLog.php';
       require '../Model/modalAtelier_Insert.php';
    }

}