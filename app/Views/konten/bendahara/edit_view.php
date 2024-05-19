<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container p-5">
    <a href="<?= base_url('bendahara'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data bendahara</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('bendahara/update'); ?>">
                <div class="form-group">
                    <label for="kode_user" class="col-form-label">Kode User</label>
                    <input type="text" value="<?= $bendahara->kode_user; ?>" class="form-control" id="kode_user" name="kode_user">
                </div>
                <div class="form-group">
                    <label for="username" class="col-form-label">Nama bendahara</label>
                    <input type="text" value="<?= $bendahara->username; ?>" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="pass" class="col-form-label">Password</label>
                    <input type="text" value="<?= $bendahara->pass; ?>" class="form-control" id="pass" name="pass">
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