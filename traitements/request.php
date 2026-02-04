<?php
    
   
    
$file = "C:\\xampp\htdocs\l2gl\projetTache2\\tasks.json";

    

    function getTasks(){
        // $request = "SELECT * FROM task";
        // global $pdo;      
        // $exe = $pdo -> query($request);
        // return $exe->fetchAll();
        global $file;
        $tasks_json = file_get_contents($file);// control si le fichier n'existe pas, afficher no task là ou sera appelé la function, pas dans request
        return json_decode($tasks_json,true); 
    }

function addTask($title, $description, $deadline, $priority) {

    $creation_date = date("Y-m-d");
    $statut = "To Do";
   
    
    global $file;
    
    $tasks = getTasks();
    $new_task = [
        "id" =>time(),
        "title" => htmlentities($title),
        "description" => htmlspecialchars($description),
        "creation date" => $creation_date,
        "deadline" => $deadline,
        "priority" => $priority,
        "statut" => $statut
    ];

    $tasks[]=$new_task;
    $tasks_json = json_encode($tasks,JSON_PRETTY_PRINT);
    return file_put_contents($file,$tasks_json);


}

function editTask($id,$title, $description, $deadline, $priority){
     global $file;
    
    $tasks = getTasks();
    for($i = 0; $i < count($tasks);++$i){
        if((string)$tasks[$i]["id"] === (string)$id){
            $tasks[$i]["title"] = htmlentities($title);
            $tasks[$i]["description"] = htmlspecialchars($description);
            $tasks[$i]["deadline"] = $deadline;
            $tasks[$i]["priority"] = $priority;
        }
          
        
        }
    
    $tasks_json = json_encode($tasks,JSON_PRETTY_PRINT);
    return file_put_contents($file,$tasks_json);
}

function editStatut($id){
    global $file;
    $statuts = ["To Do","In progress","Done"];
    $tasks = getTasks();
    for($i = 0; $i < count($tasks);++$i){ //ça devrait être une function rechercherTask by $id return task or []
       if((string)$tasks[$i]["id"] === (string)$id){
            $index = array_search($tasks[$i]["statut"],$statuts);
            $tasks[$i]["statut"] = ($index == 2)?$statuts[0]:$statuts[$index+1];
    }
    }
    $tasks_json = json_encode($tasks,JSON_PRETTY_PRINT);
    return file_put_contents($file,$tasks_json);


}

function delTask($id){ //trouver puis unset task
    global $file;
    $tasks = getTasks();
    
    foreach($tasks as $key => $task){
        if($task["id"] == $id)
            unset($tasks[$key]);
        break;
    }
    $tasks_json = json_encode($tasks,JSON_PRETTY_PRINT);
    return file_put_contents($file,$tasks_json);
}

?>