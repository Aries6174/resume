<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Work Experience</h1>
        <a href="/experience/new" class="btn btn-primary">Add New Experience</a>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table">
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
                        <a href="/experience/edit/<?= $exp['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/experience/delete/<?= $exp['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
