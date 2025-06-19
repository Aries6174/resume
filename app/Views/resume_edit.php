<div class="container py-5">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <h1 class="mb-4">Edit Resume</h1>

    <form action="/update" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= esc($name) ?>">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= esc($phone) ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= esc($email) ?>">
        </div>

        <div class="mb-3">
            <label for="github" class="form-label">GitHub</label>
            <input type="url" class="form-control" id="github" name="github" value="<?= esc($github) ?>">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?= esc($address) ?>">
        </div>

        <div class="mb-3">
            <label for="profile" class="form-label">Profile</label>
            <textarea class="form-control" id="profile" name="profile" rows="4"><?= esc($profile) ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Resume</button>
    </form>
</div>
