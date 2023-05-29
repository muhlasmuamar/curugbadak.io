<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<h3 class="text-center">
    <?= $title; ?>
</h3>
<?php $validation = \Config\Services::validation(); ?>
<form action="<?= base_url('admin/petugas/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <input type="hidden" name="kode" value="<?= $cari->id_admin; ?>">
    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" value="<?= $cari->nama; ?>">
        <small class="text-center text-danger"><?= $validation->getError('nama'); ?></small>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?= $cari->email; ?>">
        <small class="text-center text-danger"><?= $validation->getError('email'); ?></small>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" value="<?= $cari->password; ?>">
        <small class="text-center text-danger"><?= $validation->getError('password'); ?></small>

    </div>

    <button type="submit" class="btn btn-sm btn-primary">Save</button>

</form>


<?= $this->endSection(); ?>