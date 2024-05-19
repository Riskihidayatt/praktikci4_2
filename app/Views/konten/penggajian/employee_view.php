<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container pt-5">
    <div class="text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Pegawai</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Penggajian</th>
                            
                            <th>Tunjangan Suami Istri</th>
                            <th>Tunjangan Anak</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Beras</th>
                            <th>Tukin</th>
                            <th>Uang Makan</th>
                            <th>Potongan RWP</th>
                            <th>Potongan PPH</th>
                            <th>Bia Petarum</th>
                            <th>Sewa Rumah Dinas</th>
                            <th>Gaji Bersih</th>
                            <th>Kode Pegawai</th>
                            <th>Kode Tunjangan</th>
                            <th>Kode Potongan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getPenggajian as $penggajian) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $penggajian['kode_penggajian']; ?></td>
                                <td><?= $penggajian['tunj_istri_suami']; ?></td>
                                <td><?= $penggajian['tunj_anak']; ?></td>
                                <td><?= $penggajian['tunj_jabatan']; ?></td>
                                <td><?= $penggajian['tunj_beras']; ?></td>
                                <td><?= $penggajian['tukin']; ?></td>
                                <td><?= $penggajian['uang_makan']; ?></td>
                                <td><?= $penggajian['pot_rwp']; ?></td>
                                <td><?= $penggajian['pot_pph']; ?></td>
                                <td><?= $penggajian['biapetarum']; ?></td>
                                <td><?= $penggajian['sewa_rmh_dinas']; ?></td>
                                <td><?= $penggajian['gaji_bersih']; ?></td>
                                <td><?= $penggajian['kode_pegawai']; ?></td>
                                <td><?= $penggajian['kode_tunjangan']; ?></td>
                                <td><?= $penggajian['kode_potongan']; ?></td>
                                <td>
                                    <a href="<?= base_url('penggajian/edit/' . $penggajian['kode_penggajian']); ?>" class="btn btn-success" penggajian-target="#editModal">
                                        Edit
                                    </a>
                                    <a href="<?= base_url('penggajian/hapus/' . $penggajian['kode_penggajian']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data pegawai?')" class="btn btn-danger">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data penggajian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('penggajian/add'); ?>">
                    <div class="form-group">
                        <label for="kode_penggajian" class="col-form-label">Kode Penggajian</label>
                        <input type="text" class="form-control" id="kode_penggajian" name="kode_penggajian">
                    </div>
                    <div class="form-group">
                        <label for="tunj_istri_suami" class="col-form-label">Tunjangan Suami Istri</label>
                        <input type="text" class="form-control" id="tunj_istri_suami" name="tunj_istri_suami">
                    </div>
                    <div class="form-group">
                        <label for="tunj_anak" class="col-form-label">Tunjangan Anak</label>
                        <input type="text" class="form-control" id="tunj_anak" name="tunj_anak">
                    </div>
                    <div class="form-group">
                        <label for="tunj_jabatan" class="col-form-label">Tunjangan Jabatan</label>
                        <input type="text" class="form-control" id="tunj_jabatan" name="tunj_jabatan">
                    </div>
                    <div class="form-group">
                        <label for="tunj_beras" class="col-form-label">Tunjangan Beras</label>
                        <input type="text" class="form-control" id="tunj_beras" name="tunj_beras">
                    </div>
                    <div class="form-group">
                        <label for="tukin" class="col-form-label">Tukin</label>
                        <input type="text" class="form-control" id="tukin" name="tukin">
                    </div>
                    <div class="form-group">
                        <label for="uang_makan" class="col-form-label">Uang Makan</label>
                        <input type="text" class="form-control" id="uang_makan" name="uang_makan">
                    </div>
                    <div class="form-group">
                        <label for="pot_rwp" class="col-form-label">Potongan Rwp</label>
                        <input type="text" class="form-control" id="pot_rwp" name="pot_rwp">
                    </div>
                    <div class="form-group">
                        <label for="pot_pph" class="col-form-label">Potongan Pph</label>
                        <input type="text" class="form-control" id="pot_pph" name="pot_pph">
                    </div>
                    <div class="form-group">
                        <label for="biapetarum" class="col-form-label">Biapetarum</label>
                        <input type="text" class="form-control" id="biapetarum" name="biapetarum">
                    </div>
                    <div class="form-group">
                        <label for="sewa_rmh_dinas" class="col-form-label">Sewa Rumah Dinas</label>
                        <input type="text" class="form-control" id="sewa_rmh_dinas" name="sewa_rmh_dinas">
                    </div>
                    <div class="form-group">
                        <label for="gaji_bersih" class="col-form-label">Gaji Bersih</label>
                        <input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih">
                    </div>
                    <div class="form-group">
                        <label for="kode_pegawai" class="col-form-label">Kode Pegawai</label>
                        <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai">
                    </div>
                    <div class="form-group">
                        <label for="kode_tunjangan" class="col-form-label">Kode Tunjangan</label>
                        <input type="text" class="form-control" id="kode_tunjangan" name="kode_tunjangan">
                    </div>
                    <div class="form-group">
                        <label for="kode_potongan" class="col-form-label">Kode Potongan</label>
                        <input type="text" class="form-control" id="kode_potongan" name="kode_potongan">
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