<?php
require 'include/functions.php';
logged_only();
if(!empty($_POST)){

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $_SESSION['flash']['danger'] = "Les mots de passes ne correspondent pas";
    }else{
        $user_id = $_SESSION['auth']->id;
        require_once 'inc/db.php';
        $pdo->prepare('UPDATE informations SET password = ? WHERE id = ?')->execute([$_POST['password'], $user_id]);
        $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";
        header('Location: tableau_de_bord.php');
    }

}?>
