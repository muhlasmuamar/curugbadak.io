<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<h3 class="text-center">
    <?= $hal; ?>
</h3>
<table class="table">
    <!-- tambah data -->
    <div class="">
        <a href="<?= base_url('admin/petugas/add'); ?>" class="btn btn-sm btn-primary">Add</a>
    </div>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($petugas as $data) :
        ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $data->nama; ?></td>
                <td><?= $data->email; ?></td>
                </td>
                <td>
                    <a href="<?= base_url('admin/petugas/edit/' . $data->id_admin); ?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="<?= base_url('admin/petugas/delete/' . $data->id_admin); ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
        endforeach;
        ?>
    </tbody>
</table>


<?= $this->endSection(); ?>