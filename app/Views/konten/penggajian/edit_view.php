<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container p-5">
    <a href="<?= base_url('penggajian'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data Penggajian</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('penggajian/update'); ?>">
                <div class="form-group">
                    <label for="kode_penggajian" class="col-form-label">Kode Penggajian</label>
                    <input type="text" class="form-control" id="kode_penggajian" name="kode_penggajian">
                </div>
                <div class="form-group">
                    <label for="tunj_istri-suami" class="col-form-label">Tunjangan Suami Istri</label>
                    <input type="text" class="form-control" id="tunj_istri-suami" name="tunj_istri-suami">
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
<?= $this->endSection() ?>