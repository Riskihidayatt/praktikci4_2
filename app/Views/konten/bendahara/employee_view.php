<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container pt-5">
    <div class="text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Bendahara</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getBendahara as $bendahara) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $bendahara['kode_user']; ?></td>
                                <td><?= $bendahara['username']; ?></td>
                                <td><?= $bendahara['pass']; ?></td>

                                <td>
                                    <a href="<?= base_url('bendahara/edit/' . $bendahara['kode_user']); ?>" class="btn btn-success" data-target="#editModal">
                                        Edit
                                    </a>
                                    <a href="<?= base_url('bendahara/hapus/' . $bendahara['kode_user']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data bendahara?')" class="btn btn-danger">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!--   Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data bendahara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('bendahara/add'); ?>">
                    <div class="form-group">
                        <label for="kode_user" class="col-form-label">Kode user</label>
                        <input type="text" class="form-control" id="kode_user" name="kode_user">
                    </div>
                    <div class="form-group">
                        <label for="usernama" class="col-form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-form-label">Password</label>
                        <input type="text" class="form-control" id="pass" name="pass">
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
<?= $this->endSection() ?>