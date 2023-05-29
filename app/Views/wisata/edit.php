<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<h3 class="text-center">
    <?= $title; ?>
</h3>
<form action="<?= base_url('admin/wisata/update'); ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="id_wisata" value="<?= $cari->id_wisata; ?>">
    <div class="mb-3">
        <label>Nama Wisata</label>
        <input type="text" name="nama_wisata" class="form-control" value="<?= $cari->nama_wisata; ?>">

        <div class="mb-3">
            <label>Deskripsi Wisata</label>
            <input type="text" name="deskripsi" class="form-control" value="<?= $cari->deskripsi; ?>">

        </div>
        <div class="mb-3">
            <label>Foto Wisata</label>
            <input type="file" name="foto" class="form-control" value="<?= $cari->foto; ?>">

        </div>
        <div class="mb-3">
            <label>Harga Tiket Wisata</label>
            <input type="text" name="harga" class="form-control" value="<?= $cari->harga; ?>">

        </div>
        <button type="submit" class="btn btn-sm btn-primary">Save</button>
    </div>
</form>


<?= $this->endSection(); ?>