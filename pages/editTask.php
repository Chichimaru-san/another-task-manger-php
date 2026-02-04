<?php 
    foreach($tasks as $task){
        if ($task["id"] == $_GET["id"])
            break;
    }
?>
<div class="row mt-5 offset-3">

    <div class="card col-6 ">
        <div class="card-header bg-primary text-white">Add Task</div>
        <div class="card-body">
            <form action="http://localhost/l2gl/projetTache2/traitements/action.php" method="post">
                <div class="form-group">
                    <input type="text" name="id" value="<?= $task["id"] ?>" hidden>
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $task["title"] ?>">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" ><?= $task["description"] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Deadline</label>
                    <input type="date" name="deadline" class="form-control" value="<?= $task["deadline"] ?>">
                </div>
                
                <div class="form-group">
                    <label for="">Priority</label>
                    <select name="priority" class="form-control" id="">
                        <option <?php if($task["priority"] == "Low") echo"selected" ?> value="Low">Low</option>
                        <option <?php if($task["priority"] == "Medium") echo"selected" ?> value="Medium">Medium</option>
                        <option <?php if($task["priority"] == "High") echo"selected" ?> value="High">High</option>
                    </select>
                </div>

                <button class="btn btn-primary mt-3" name="editTask">Edit</button>
                <a class="btn btn-warning mt-3" href="index.php?page=listTask">Cancel</a>
            </form>
        </div>
    </div>
</div>