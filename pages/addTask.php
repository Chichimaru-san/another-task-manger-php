<div class="row mt-5 offset-3">

    <div class="card col-6 ">
        <div class="card-header bg-primary text-white">Add Task</div>
        <div class="card-body">
            <form action="http://localhost/l2gl/projetTache2/traitements/action.php" method="post">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Deadline</label>
                    <input type="date" name="deadline" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Priority</label>
                    <select name="priority" class="form-control" id="">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>

                <button class="btn btn-primary mt-3" name="addTask">Enregistrer</button>
            </form>
        </div>
    </div>
</div>