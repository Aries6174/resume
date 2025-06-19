<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <h1 class="display-4 mb-4">Website Projects</h1>
    <div class="row">
        <!-- Add your website projects here -->
        <div class="col-md-6 mb-4">
            <div class="card bg-dark-transparent">
                <div class="card-body">
                    <h3>Project Name</h3>
                    <p class="text-muted">Project description goes here</p>
                    <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
