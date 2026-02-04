<?php 
    require_once 'request.php';

    if (isset($_POST["addTask"])){
        extract($_POST);
        if(addTask($title,$description,$deadline,$priority))
            header("location:http://localhost/l2gl/projetTache2/?page=listTask");
    }

    if(isset($_POST["editTask"]) ){
        extract($_POST);
        if(editTask($id,$title,$description,$deadline,$priority))
            header("location:http://localhost/l2gl/projetTache2/?page=listTask");
    }

    if(isset($_GET["action"]) && $_GET["action"] == "delTask"){
        $id = $_GET["id"];
        if(delTask($id))
            header("location: index.php?page=listTask");
    }

    if (isset($_GET['action']) && $_GET['action'] == "editStatut"){
        $id = $_GET["id"];
        if(editStatut($id))
            header("location:http://localhost/l2gl/projetTache2/?page=listTask");
    }
?>