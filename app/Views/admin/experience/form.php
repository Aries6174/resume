<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container py-4">
    <h1><?= isset($experience) ? 'Edit Experience' : 'Add New Experience' ?></h1>

    <form action="<?= isset($experience) ? "/experience/update/{$experience['id']}" : '/experience/create' ?>" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= isset($experience) ? esc($experience['title']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" class="form-control" id="company" name="company" value="<?= isset($experience) ? esc($experience['company']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Period</label>
            <input type="text" class="form-control" id="period" name="period" value="<?= isset($experience) ? esc($experience['period']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?= isset($experience) ? esc($experience['description']) : '' ?></textarea>
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" id="details" name="details" rows="3"><?= isset($experience) ? esc($experience['details']) : '' ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="/experience" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?= $this->endSection() ?>
