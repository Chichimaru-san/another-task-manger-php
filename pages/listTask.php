<div class="row"> <?php foreach ($tasks as $task): ?>   
        <div class="col-md-4"> <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title fw-bold mb-0" style="color: #2d3436;"><?= htmlspecialchars($task["title"]); ?></h5>
                        <div class="<?= priorityColor($task["priority"]); ?> mt-1" style="width: 12px; height: 12px; border-radius: 50%;" title="<?= $task["priority"]; ?>"></div>
                    </div>

                    <p class="card-text text-muted small mb-3">
                        <?= htmlspecialchars($task["description"]); ?>
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                        <a href="index.php?action=editStatut&id=<?= $task["id"] ?>" class="badge rounded-pill bg-light text-<?= statutColor($task["statut"]) ?> border border-<?= statutColor($task["statut"]) ?> px-3">
                            <?= $task["statut"]; ?>
                        </a>

                        <div class="text-secondary small">
                            <i class="bi bi-calendar-event me-1"></i><?= $task["creation date"]; ?>
                        </div>

                        <div class="text-danger small fw-bold">
                            <i class="bi bi-bell-fill me-1"></i><?= $task["deadline"]; ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 border-top pt-2">
                        <?php if($task['statut'] != "Done"): ?>
                        <a href="index.php?page=editTask&id=<?= $task["id"] ?>" class="btn btn-sm btn-primary border-0">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <?php endif; ?>

                        <a href="index.php?action=delTask&id=<?= $task["id"] ?>" class="btn btn-sm btn-danger border-0" onclick="return confirm('Supprimer cette tâche ?')">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div> 



