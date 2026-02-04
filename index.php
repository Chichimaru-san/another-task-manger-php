<?php
$dossier_public = 'http://localhost/l2gl/projetTache2/public/';
require_once('traitements/action.php');
require_once('includes/header.php');
require_once('includes/navbar.php');
require_once('includes/sidebar.php');
require_once('traitements/request.php');
require_once('traitements/functions.php');

$tasks = getTasks();

$page = isset($_GET['page'])? $_GET['page'] : 'accueil';
if(file_exists("pages/$page.php")){
    include_once("pages/$page.php");
} else {
    include_once("pages/erreur404.php");
}


include_once('includes/footer.php');



?>