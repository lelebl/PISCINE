<?php
require 'include/functions.php';
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 
include("include/db.php");

$id_ajout=$_GET['id'];
$username_ajout=$_GET['username_ajout'];


$req = $pdo->prepare("DELETE FROM relations WHERE id_1 = ? AND id_2= ?");
$req->execute([$_SESSION['auth']->id,$id_ajout]);
$req = $pdo->prepare("DELETE FROM relations WHERE id_2 = ? AND id_1= ?");
$req->execute([$_SESSION['auth']->id,$id_ajout]);

?>