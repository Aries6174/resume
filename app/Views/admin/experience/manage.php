<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Work Experiences</h1>
        <a href="/experience/new" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Add New Experience
        </a>
    </div>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-<?= session()->getFlashdata('type') ?>">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>

    <div class="card bg-dark-transparent">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Company</th>
                            <th>Period</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($experiences as $exp): ?>
                        <tr>
                            <td><?= esc($exp['title']) ?></td>
                            <td><?= esc($exp['company']) ?></td>
                            <td><?= esc($exp['period']) ?></td>
                            <td>
                                <a href="/experience/edit/<?= $exp['id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" 
                                        onclick="confirmDelete(<?= $exp['id'] ?>)">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this experience?')) {
        window.location.href = `/experience/delete/${id}`;
    }
}
</script>
