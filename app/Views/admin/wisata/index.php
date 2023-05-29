<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<h3 class="text-center">
    <?= $hal; ?>
</h3>
<table class="table">
    <!-- tambah data -->

    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Objek Wisata</th>
            <th scope="col">Foto</th>
            <th scope="col">Harga Tiket</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($wisata as $data) :
        ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $data->nama_wisata; ?></td>
                <td><img src="<?= base_url('foto/' . $data->foto); ?>" style="width: 100px; height: 100px" alt=""></td>
                <td><?= $data->harga; ?></td>
                </td>
                <td>
                    <a href="<?= base_url('admin/wisata/edit/' . $data->id_wisata); ?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="<?= base_url('admin/wisata/delete/' . $data->id_wisata); ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
        endforeach;
        ?>
    </tbody>
</table>
<div class="d-grid">
    <a href="<?= base_url('admin/wisata/add'); ?>" class="btn btn-sm btn-primary">Add</a>
</div>


<?= $this->endSection(); ?>