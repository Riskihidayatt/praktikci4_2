<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container pt-5">
    <div class="text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Potongan</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Potongan</th>
                            <th>Nama Potongan</th>
                            <th>Jumlah Potongan</th>
                            <th>aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getPotongan as $potongan) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $potongan['kode_potongan']; ?></td>
                                <td><?= $potongan['nama_potongan']; ?></td>
                                <td><?= $potongan['jumlah_potongan']; ?></td>

                                <td>
                                    <a href="<?= base_url('potongan/edit/' . $potongan['kode_potongan']); ?>" class="btn btn-success" data-target="#editModal">
                                        Edit
                                    </a>
                                    <a href="<?= base_url('potongan/hapus/' . $potongan['kode_potongan']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data potongan?')" class="btn btn-danger">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Potongan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('potongan/add'); ?>">
                    <div class="form-group">
                        <label for="kode_potongan" class="col-form-label">Kode Potongan</label>
                        <input type="text" class="form-control" id="kode_potongan" name="kode_potongan">
                    </div>
                    <div class="form-group">
                        <label for="nama_potongan" class="col-form-label">Nama Potongan</label>
                        <input type="text" class="form-control" id="nama_potongan" name="nama_potongan">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_potongan" class="col-form-label">Jumlah Potongan</label>
                        <input type="text" class="form-control" id="jumlah_potongan" name="jumlah_potongan">
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