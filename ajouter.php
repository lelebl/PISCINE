<?php
require 'include/functions.php';
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 

$id_ajout=$_GET['id'];
$username_ajout=$_GET['username_ajout'];

require_once 'include/db.php';

$req = $pdo->prepare("INSERT INTO relations SET id_1 = ?, id_2 = ?");
$req->execute([$_SESSION['auth']->id,$id_ajout]);

?>
