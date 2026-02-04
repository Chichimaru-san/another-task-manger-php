<?php
function statutColor($statut){
    if($statut == "To Do")
        return "primary";
    else if($statut == "In progress")
        return "warning";
    else
        return "success";
}

function priorityColor($priority){
    if($priority == "Low")
        return "bg-success";
    else if($priority == "Medium")
        return "bg-warning";
    else
        return "bg-danger";
}
?>