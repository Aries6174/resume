<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <h1 class="display-4 mb-4">3D Artworks</h1>
    <div class="row">
        <!-- Add your 3D artwork projects here -->
        <div class="col-md-4 mb-4">
            <div class="card bg-dark-transparent">
                <img src="path/to/artwork.jpg" class="card-img-top" alt="Artwork name">
                <div class="card-body">
                    <h3>Artwork Name</h3>
                    <p class="text-muted">Description of the artwork</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
