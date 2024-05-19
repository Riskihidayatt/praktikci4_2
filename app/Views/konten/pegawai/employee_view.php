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
                            <th>Kode Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Jenis Kelamin</th>
                            <th>TMT</th>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                            <th>Status Pegawai</th>
                            <th>Status Pernikahan</th>
                            <th>Jumlah Anak</th>
                            <th>Alamat</th>
                            <th>Gaji Pokok</th>
                            <th>No. Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getPegawai as $pegawai) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $pegawai['kode_pegawai']; ?></td>
                                <td><?= $pegawai['nama_pegawai']; ?></td>
                                <td><?= $pegawai['tmpt_lahir']; ?></td>
                                <td><?= $pegawai['tgl_lahir']; ?></td>
                                <td><?= $pegawai['agama']; ?></td>
                                <td><?= $pegawai['pedetar']; ?></td>
                                <td><?= $pegawai['jenis_kelamin']; ?></td>
                                <td><?= $pegawai['tmt']; ?></td>
                                <td><?= $pegawai['golongan']; ?></td>
                                <td><?= $pegawai['jabatan']; ?></td>
                                <td><?= $pegawai['status_pegawai']; ?></td>
                                <td><?= $pegawai['status_pernikahan']; ?></td>
                                <td><?= $pegawai['jumlah_anak']; ?></td>
                                <td><?= $pegawai['alamat']; ?></td>
                                <td><?= $pegawai['gaji_pokok']; ?></td>
                                <td><?= $pegawai['no_tlp']; ?></td>
                                <td>
                                    <a href="<?= base_url('pegawai/edit/' . $pegawai['kode_pegawai']); ?>" class="btn btn-success" data-target="#editModal">
                                        Edit
                                    </a>
                                    <a href="<?= base_url('pegawai/hapus/' . $pegawai['kode_pegawai']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data pegawai?')" class="btn btn-danger">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('pegawai/add'); ?>">
                    <div class="form-group">
                        <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="agama" class="col-form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama">
                    </div>
                    <div class="form-group">
                        <label for="pedetar" class="col-form-label">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" id="pedetar" name="pedetar">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">---Pilih Jenis Kelamin---</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tmt" class="col-form-label">TMT</label>
                        <input type="date" class="form-control" id="tmt" name="tmt">
                    </div>
                    <div class="form-group">
                        <label for="golongan" class="col-form-label">Golongan</label>
                        <input type="text" class="form-control" id="golongan" name="golongan">
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="status_pegawai" class="col-form-label">Status Pegawai</label>
                        <select class="form-control" id="status_pegawai" name="status_pegawai">
                            <option value="">---Pilih Status Pegawai---</option>
                            <option value="aktive">Aktive</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_pernikahan" class="col-form-label">Status Pernikahan</label>
                        <select class="form-control" id="status_pernikahan" name="status_pernikahan">
                            <option value="">---Pilih Status Pernikahan---</option>
                            <option value="sudah">Sudah Menikah</option>
                            <option value="belum">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_anak" class="col-form-label">Jumlah Anak</label>
                        <input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="gaji_pokok" class="col-form-label">Gaji Pokok</label>
                        <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok">
                    </div>
                    <div class="form-group">
                        <label for="no_tlp" class="col-form-label">No. Telepon</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp">
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